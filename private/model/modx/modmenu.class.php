<?php
/*
 * This file is part of MODX Revolution.
 *
 * Copyright (c) MODX, LLC. All Rights Reserved.
 *
 * For complete copyright and license information, see the COPYRIGHT and LICENSE
 * files found in the top-level directory of this distribution.
 */

/**
 * Represents a menu item at the top of the MODX manager.
 *
 * @property string $text The text of the menu item. Can be a lexicon key.
 * @property int $action The modAction ID this menu item maps to.
 * @property string $description The description text for the menu item. Can be a lexicon key.
 * @property string $icon The icon for the menu item (not used)
 * @property int $menuindex The index, or rank, of the menu in its level
 * @property string $params Any REQUEST params to be attached to the link
 * @property string $handler If specified, instead of a link, this JS will be used to handle the menu item
 * @property string $permissions A comma-separated list of required permissions to view this menu item
 *
 * @see modAction
 * @package modx
 */
class modMenu extends modAccessibleObject {

    /**
     * Overrides xPDOObject::save to cache the menus.
     *
     * {@inheritdoc}
     */
    public function save($cacheFlag = null) {
        $saved = parent::save($cacheFlag);
        if ($saved && empty($this->xpdo->config[xPDO::OPT_SETUP])) {
            $this->rebuildCache();
        }
        return $saved;
    }

    /**
     * Overrides xPDOObject::remove to cache the menus.
     *
     * {@inheritdoc}
     */
    public function remove(array $ancestors = array()) {
        $removed = parent::remove($ancestors);
        if ($removed && empty($this->xpdo->config[xPDO::OPT_SETUP])) {
            $this->rebuildCache();
        }
        return $removed;
    }

    /**
     * Rebuilds the menu map cache.
     *
     * @param string $start The start menu to build from recursively.
     * @return array An array of modMenu objects, in tree form.
     */
    public function rebuildCache($start = '') {
        $cacheKey = 'menus/';
        if ($start !== '') {
            $cacheKey .= "{$start}/";
        }
        $cacheKey .= $this->xpdo->getOption('manager_language',null,$this->xpdo->getOption('cultureKey',null,'en'));
        $menus = $this->getSubMenus($start);
        $cached = $this->xpdo->cacheManager->set($cacheKey, $menus, 0, array(
            xPDO::OPT_CACHE_KEY => $this->xpdo->cacheManager->getOption('cache_menu_key', null, 'menu'),
            xPDO::OPT_CACHE_HANDLER => $this->xpdo->cacheManager->getOption('cache_menu_handler', null, $this->xpdo->getOption(xPDO::OPT_CACHE_HANDLER)),
            xPDO::OPT_CACHE_FORMAT => (integer) $this->xpdo->getOption('cache_menu_format', null, $this->xpdo->getOption(xPDO::OPT_CACHE_FORMAT, null, xPDOCacheManager::CACHE_PHP)),
        ));
        if ($cached === false) {
            $this->xpdo->log(xPDO::LOG_LEVEL_ERROR, "The menu cache key {$cacheKey} could not be written.");
        }

        return $menus;
    }

    /**
     * Gets all submenus from a start menu.
     *
     * @param string $start The top menu to load from.
     * @return array An array of modMenu objects, in tree form.
     */
    public function getSubMenus($start = '') {
        if (!$this->xpdo->lexicon) {
            $this->xpdo->getService('lexicon','modLexicon');
        }
        $this->xpdo->lexicon->load('menu','topmenu');

        $c = $this->xpdo->newQuery('modMenu');
        $c->select($this->xpdo->getSelectColumns('modMenu', 'modMenu'));

        /* 2.2 and earlier support */
        $c->leftJoin('modAction','Action');
        $c->select(array(
            'action_controller' => 'Action.controller',
            'action_namespace' => 'Action.namespace',
        ));

        $c->where(array(
            'modMenu.parent' => $start,
        ));
        
        if ($this->xpdo->getOption('package_installer_at_top', null, true)) {
            // make sure installer is always on top
            $c->sortby('FIELD(modMenu.text, "installer")','DESC');
        }
        
        $c->sortby($this->xpdo->getSelectColumns('modMenu','modMenu','',array('menuindex')),'ASC');
        $menus = $this->xpdo->getCollection('modMenu',$c);
        if (count($menus) < 1) return array();

        $list = array();
        /** @var modMenu $menu */
        foreach ($menus as $menu) {
            $ma = $menu->toArray();
            $ma['id'] = $menu->get('text');
            $action = $menu->get('action');
            $namespace = $menu->get('namespace');

            // allow 2.2 and earlier actions
            $deprecatedNamespace = $menu->get('action_namespace');
            if (!empty($deprecatedNamespace)) {
                $identifiers = $this->xpdo->getOption('package_install_identifiers', null, array());
                if (empty($identifiers) || in_array($deprecatedNamespace, $identifiers)) {
                    $this->xpdo->deprecated('2.3.0', 'Support for modAction has been replaced with routing based on a namespace and action name. Please update the extra with the namespace ' . $deprecatedNamespace . ' to the routing based system.', 'modAction support');
                }
                $namespace = $deprecatedNamespace;
            }
            if ($namespace != 'core') {
                $this->xpdo->lexicon->load($namespace.':default');
            }

            /* if 3rd party menu item, load proper text */
            if (!empty($action)) {
                if (!empty($namespace) && $namespace != 'core') {
                    $ma['text'] = $menu->get('text') === 'user'
                        ? $this->xpdo->lexicon($menu->get('text'), array('username' => $this->xpdo->getLoginUserName()))
                        : $this->xpdo->lexicon($menu->get('text'));
                } else {
                    $ma['text'] = $menu->get('text') === 'user'
                        ? $this->xpdo->lexicon($menu->get('text'), array('username' => $this->xpdo->getLoginUserName()))
                        : $this->xpdo->lexicon($menu->get('text'));
                }
            } else {
                $ma['text'] = $menu->get('text') === 'user'
                    ? $this->xpdo->lexicon($menu->get('text'), array('username' => $this->xpdo->getLoginUserName()))
                    : $this->xpdo->lexicon($menu->get('text'));
            }

            $desc = $menu->get('description');
            $ma['description'] = !empty($desc) ? $this->xpdo->lexicon($desc) : '';
            $ma['children'] = $menu->get('text') != '' ? $this->getSubMenus($menu->get('text')) : array();

            if ($menu->get('controller')) {
                $ma['controller'] = $menu->get('controller');
            } else {
                $ma['controller'] = '';
            }
            $list[] = $ma;
        }
        unset($menu,$desc,$namespace,$ma);
        return $list;
    }
}
