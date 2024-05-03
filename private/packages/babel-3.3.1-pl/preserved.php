<?php return array (
  'b7b2f943a216af89eaf966b72dbe5f7a' => 
  array (
    'criteria' => 
    array (
      'name' => 'babel',
    ),
    'object' => 
    array (
      'name' => 'babel',
      'path' => '{core_path}components/babel/',
      'assets_path' => '{assets_path}components/babel/',
    ),
  ),
  '4067ee78f6ab116c749ff8fcc471940c' => 
  array (
    'criteria' => 
    array (
      'key' => 'babel.contextKeys',
    ),
    'object' => 
    array (
      'key' => 'babel.contextKeys',
      'value' => 'de,en',
      'xtype' => 'textfield',
      'namespace' => 'babel',
      'area' => 'common',
      'editedon' => '2021-11-03 12:00:32',
    ),
  ),
  '2d02671024abfa6535f7afc91b94216a' => 
  array (
    'criteria' => 
    array (
      'key' => 'babel.babelTvName',
    ),
    'object' => 
    array (
      'key' => 'babel.babelTvName',
      'value' => 'babelLanguageLinks',
      'xtype' => 'textfield',
      'namespace' => 'babel',
      'area' => 'common',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '813d65abc5a737946e49e39aa9f15cca' => 
  array (
    'criteria' => 
    array (
      'key' => 'babel.syncTvs',
    ),
    'object' => 
    array (
      'key' => 'babel.syncTvs',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'babel',
      'area' => 'common',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd31e22144b15ae59ac8aa6466c73b00f' => 
  array (
    'criteria' => 
    array (
      'category' => 'Babel',
    ),
    'object' => 
    array (
      'id' => 35,
      'parent' => 0,
      'category' => 'Babel',
      'rank' => 0,
    ),
  ),
  'e857ca63aef94dcfd26721212fc6188e' => 
  array (
    'criteria' => 
    array (
      'name' => 'BabelLinks',
    ),
    'object' => 
    array (
      'id' => 77,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'BabelLinks',
      'description' => 'Displays links to translated resources.',
      'editor_type' => 0,
      'category' => 35,
      'cache_type' => 0,
      'snippet' => '/**
 * Babel
 *
 * Copyright 2010 by Jakob Class <jakob.class@class-zec.de>
 *
 * This file is part of Babel.
 *
 * Babel is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Babel is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Babel; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package babel
 */
/**
 * BabelLinks snippet to display links to translated resources
 *
 * Based on ideas of Sylvain Aerni <enzyms@gmail.com>
 *
 * @author Jakob Class <jakob.class@class-zec.de>
 *         goldsky <goldsky@virtudraft.com>
 *
 * @package babel
 *
 * @param resourceId        optional: id of resource of which links to translations should be displayed. Default: current resource
 * @param tpl               optional: Chunk to display a language link. Default: babelLink
 * @param activeCls         optional: CSS class name for the current active language. Default: active
 * @param showUnpublished   optional: flag whether to show unpublished translations. Default: 0
 * @param showCurrent       optional: flag whether to show a link to a translation of the current language. Default: 1
 */
$babel = $modx->getService(\'babel\', \'Babel\', $modx->getOption(\'babel.core_path\', null, $modx->getOption(\'core_path\').\'components/babel/\').\'model/babel/\', $scriptProperties);

/* be sure babel and babel TV is loaded */
if (!($babel instanceof Babel) || !$babel->babelTv)
    return;

/* get snippet properties */
$resourceId = intval($modx->getOption(\'resourceId\', $scriptProperties));
if (empty($resourceId)) {
    if (!empty($modx->resource) && is_object($modx->resource)) {
        $resourceId = $modx->resource->get(\'id\');
    } else {
        return;
    }
}
$tpl              = $modx->getOption(\'tpl\', $scriptProperties, \'babelLink\');
$wrapperTpl       = $modx->getOption(\'wrapperTpl\', $scriptProperties);
$activeCls        = $modx->getOption(\'activeCls\', $scriptProperties, \'active\');
$showUnpublished  = $modx->getOption(\'showUnpublished\', $scriptProperties, 0);
$showCurrent      = $modx->getOption(\'showCurrent\', $scriptProperties, 0);
$outputSeparator  = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");
$includeUnlinked  = $modx->getOption(\'includeUnlinked\', $scriptProperties, 0);
$ignoreSiteStatus = $modx->getOption(\'ignoreSiteStatus\', $scriptProperties, 0);

if (!empty($modx->resource) && is_object($modx->resource) && $resourceId === $modx->resource->get(\'id\')) {
    $contextKeys = $babel->getGroupContextKeys($modx->resource->get(\'context_key\'));
    $resource    = $modx->resource;
} else {
    $resource = $modx->getObject(\'modResource\', $resourceId);
    if (!$resource) {
        return;
    }
    $contextKeys = $babel->getGroupContextKeys($resource->get(\'context_key\'));
}

$linkedResources = $babel->getLinkedResources($resourceId);
$languages       = $babel->getLanguages();
$outputArray     = [];
foreach ($contextKeys as $contextKey) {
    if (!$showCurrent && $contextKey === $resource->get(\'context_key\')) {
        continue;
    }
    if (!$includeUnlinked && !isset($linkedResources[$contextKey])) {
        continue;
    }
    $context = $modx->getObject(\'modContext\', [\'key\' => $contextKey]);
    if (!$context) {
        $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load context: \'.$contextKey);
        continue;
    }
    $context->prepare();
    if (!$context->getOption(\'site_status\', null, true) && !$ignoreSiteStatus) {
        continue;
    }
    $cultureKey           = $context->getOption(\'cultureKey\', $modx->getOption(\'cultureKey\'));
    $translationAvailable = false;
    if (isset($linkedResources[$contextKey])) {
        $c = $modx->newQuery(\'modResource\');
        $c->where([
            \'id\'          => $linkedResources[$contextKey],
            \'deleted:!=\'  => 1,
            \'published:=\' => 1,
                  ]);
        if ($showUnpublished) {
            $c->where([
                \'OR:published:=\' => 0,
                      ]);
        }
        $count = $modx->getCount(\'modResource\', $c);
        if ($count) {
            $translationAvailable = true;
        }
    }
    $getRequest = $_GET;
    unset($getRequest[\'id\']);
    unset($getRequest[$modx->getOption(\'request_param_alias\', null, \'q\')]);
    unset($getRequest[\'cultureKey\']);
    if ($translationAvailable) {
        $url          = $context->makeUrl($linkedResources[$contextKey], $getRequest, \'full\');
        $active       = ($resource->get(\'context_key\') == $contextKey) ? $activeCls : \'\';
        $placeholders = [
            \'cultureKey\' => $cultureKey,
            \'url\'        => $url,
            \'active\'     => $active,
            \'id\'         => $linkedResources[$contextKey],
            \'language\'   => $languages[$cultureKey][\'Description\'],
        ];

        if (!empty($toArray)) {
            $outputArray[] = $placeholders;
        } else {
            $chunk = $babel->getChunk($tpl, $placeholders);
            if (!empty($chunk)) {
                $outputArray[] = $chunk;
            }
        }
    } elseif ($includeUnlinked) {
        $url          = $context->makeUrl($context->getOption(\'site_start\'), $getRequest, \'full\');
        $active       = ($resource->get(\'context_key\') == $contextKey) ? $activeCls : \'\';
        $placeholders = [
            \'cultureKey\' => $cultureKey,
            \'url\'        => $url,
            \'active\'     => $active,
            \'id\'         => $context->getOption(\'site_start\'),
            \'language\'   => $languages[$cultureKey][\'Description\'],
        ];

        if (!empty($toArray)) {
            $outputArray[] = $placeholders;
        } else {
            $chunk = $babel->getChunk($tpl, $placeholders);
            if (!empty($chunk)) {
                $outputArray[] = $chunk;
            }
        }
    }
}

if (!empty($toArray)) {
    return \'<pre>\'.print_r($outputArray, 1).\'</pre>\';
}

$output = implode($outputSeparator, $outputArray);
if (!empty($wrapperTpl)) {
    $output = $babel->getChunk($wrapperTpl, [
        \'babelLinks\' => $output
    ]);
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return;
}

return $output;',
      'locked' => 0,
      'properties' => 'a:6:{s:10:"resourceId";a:7:{s:4:"name";s:10:"resourceId";s:4:"desc";s:21:"babellinks.resourceId";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:20:"babeltranslation.tpl";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"babelLink";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:9:"activeCls";a:7:{s:4:"name";s:9:"activeCls";s:4:"desc";s:26:"babeltranslation.activeCls";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:6:"active";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:32:"babeltranslation.showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:11:"showCurrent";a:7:{s:4:"name";s:11:"showCurrent";s:4:"desc";s:28:"babeltranslation.showCurrent";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:15:"includeUnlinked";a:7:{s:4:"name";s:15:"includeUnlinked";s:4:"desc";s:32:"babeltranslation.includeUnlinked";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Babel
 *
 * Copyright 2010 by Jakob Class <jakob.class@class-zec.de>
 *
 * This file is part of Babel.
 *
 * Babel is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Babel is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Babel; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package babel
 */
/**
 * BabelLinks snippet to display links to translated resources
 *
 * Based on ideas of Sylvain Aerni <enzyms@gmail.com>
 *
 * @author Jakob Class <jakob.class@class-zec.de>
 *         goldsky <goldsky@virtudraft.com>
 *
 * @package babel
 *
 * @param resourceId        optional: id of resource of which links to translations should be displayed. Default: current resource
 * @param tpl               optional: Chunk to display a language link. Default: babelLink
 * @param activeCls         optional: CSS class name for the current active language. Default: active
 * @param showUnpublished   optional: flag whether to show unpublished translations. Default: 0
 * @param showCurrent       optional: flag whether to show a link to a translation of the current language. Default: 1
 */
$babel = $modx->getService(\'babel\', \'Babel\', $modx->getOption(\'babel.core_path\', null, $modx->getOption(\'core_path\').\'components/babel/\').\'model/babel/\', $scriptProperties);

/* be sure babel and babel TV is loaded */
if (!($babel instanceof Babel) || !$babel->babelTv)
    return;

/* get snippet properties */
$resourceId = intval($modx->getOption(\'resourceId\', $scriptProperties));
if (empty($resourceId)) {
    if (!empty($modx->resource) && is_object($modx->resource)) {
        $resourceId = $modx->resource->get(\'id\');
    } else {
        return;
    }
}
$tpl              = $modx->getOption(\'tpl\', $scriptProperties, \'babelLink\');
$wrapperTpl       = $modx->getOption(\'wrapperTpl\', $scriptProperties);
$activeCls        = $modx->getOption(\'activeCls\', $scriptProperties, \'active\');
$showUnpublished  = $modx->getOption(\'showUnpublished\', $scriptProperties, 0);
$showCurrent      = $modx->getOption(\'showCurrent\', $scriptProperties, 0);
$outputSeparator  = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");
$includeUnlinked  = $modx->getOption(\'includeUnlinked\', $scriptProperties, 0);
$ignoreSiteStatus = $modx->getOption(\'ignoreSiteStatus\', $scriptProperties, 0);

if (!empty($modx->resource) && is_object($modx->resource) && $resourceId === $modx->resource->get(\'id\')) {
    $contextKeys = $babel->getGroupContextKeys($modx->resource->get(\'context_key\'));
    $resource    = $modx->resource;
} else {
    $resource = $modx->getObject(\'modResource\', $resourceId);
    if (!$resource) {
        return;
    }
    $contextKeys = $babel->getGroupContextKeys($resource->get(\'context_key\'));
}

$linkedResources = $babel->getLinkedResources($resourceId);
$languages       = $babel->getLanguages();
$outputArray     = [];
foreach ($contextKeys as $contextKey) {
    if (!$showCurrent && $contextKey === $resource->get(\'context_key\')) {
        continue;
    }
    if (!$includeUnlinked && !isset($linkedResources[$contextKey])) {
        continue;
    }
    $context = $modx->getObject(\'modContext\', [\'key\' => $contextKey]);
    if (!$context) {
        $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load context: \'.$contextKey);
        continue;
    }
    $context->prepare();
    if (!$context->getOption(\'site_status\', null, true) && !$ignoreSiteStatus) {
        continue;
    }
    $cultureKey           = $context->getOption(\'cultureKey\', $modx->getOption(\'cultureKey\'));
    $translationAvailable = false;
    if (isset($linkedResources[$contextKey])) {
        $c = $modx->newQuery(\'modResource\');
        $c->where([
            \'id\'          => $linkedResources[$contextKey],
            \'deleted:!=\'  => 1,
            \'published:=\' => 1,
                  ]);
        if ($showUnpublished) {
            $c->where([
                \'OR:published:=\' => 0,
                      ]);
        }
        $count = $modx->getCount(\'modResource\', $c);
        if ($count) {
            $translationAvailable = true;
        }
    }
    $getRequest = $_GET;
    unset($getRequest[\'id\']);
    unset($getRequest[$modx->getOption(\'request_param_alias\', null, \'q\')]);
    unset($getRequest[\'cultureKey\']);
    if ($translationAvailable) {
        $url          = $context->makeUrl($linkedResources[$contextKey], $getRequest, \'full\');
        $active       = ($resource->get(\'context_key\') == $contextKey) ? $activeCls : \'\';
        $placeholders = [
            \'cultureKey\' => $cultureKey,
            \'url\'        => $url,
            \'active\'     => $active,
            \'id\'         => $linkedResources[$contextKey],
            \'language\'   => $languages[$cultureKey][\'Description\'],
        ];

        if (!empty($toArray)) {
            $outputArray[] = $placeholders;
        } else {
            $chunk = $babel->getChunk($tpl, $placeholders);
            if (!empty($chunk)) {
                $outputArray[] = $chunk;
            }
        }
    } elseif ($includeUnlinked) {
        $url          = $context->makeUrl($context->getOption(\'site_start\'), $getRequest, \'full\');
        $active       = ($resource->get(\'context_key\') == $contextKey) ? $activeCls : \'\';
        $placeholders = [
            \'cultureKey\' => $cultureKey,
            \'url\'        => $url,
            \'active\'     => $active,
            \'id\'         => $context->getOption(\'site_start\'),
            \'language\'   => $languages[$cultureKey][\'Description\'],
        ];

        if (!empty($toArray)) {
            $outputArray[] = $placeholders;
        } else {
            $chunk = $babel->getChunk($tpl, $placeholders);
            if (!empty($chunk)) {
                $outputArray[] = $chunk;
            }
        }
    }
}

if (!empty($toArray)) {
    return \'<pre>\'.print_r($outputArray, 1).\'</pre>\';
}

$output = implode($outputSeparator, $outputArray);
if (!empty($wrapperTpl)) {
    $output = $babel->getChunk($wrapperTpl, [
        \'babelLinks\' => $output
    ]);
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return;
}

return $output;',
    ),
  ),
  '925a86e615b9015b4c1ba94aba1cec51' => 
  array (
    'criteria' => 
    array (
      'name' => 'BabelTranslation',
    ),
    'object' => 
    array (
      'id' => 78,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'BabelTranslation',
      'description' => 'Returns the id of a translated resource in a given context.',
      'editor_type' => 0,
      'category' => 35,
      'cache_type' => 0,
      'snippet' => '/**
 * Babel
 *
 * Copyright 2010 by Jakob Class <jakob.class@class-zec.de>
 *
 * This file is part of Babel.
 *
 * Babel is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Babel is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Babel; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package babel
 */
/**
 * BabelTranslation snippet to get the id of a translated resource in a given context.
 *
 * @author Jakob Class <jakob.class@class-zec.de>
 *
 * @package babel
 *
 * @param resourceId		optional: id of resource of which a translated resource should be determined. Default: current resource
 * @param contextKey		optional: Key of context in which translated resource should be determined.
 * @param cultureKey		optional: Key of culture in which translated resource should be determined. Used only in case contextKey was not specified.  If both omitted: uses currently set cultureKey.
 * @param showUnpublished	optional: flag whether to show unpublished translations. Default: 0
 */
$babel = $modx->getService(\'babel\', \'Babel\', $modx->getOption(\'babel.core_path\', null, $modx->getOption(\'core_path\').\'components/babel/\').\'model/babel/\', $scriptProperties);

/* be sure babel and babel TV is loaded */
if (!($babel instanceof Babel) || !$babel->babelTv)
    return;

/* get snippet properties */
$resourceIds = $modx->getOption(\'resourceId\', $scriptProperties);
if (empty($resourceIds)) {
    if (!empty($modx->resource) && is_object($modx->resource)) {
        $resourceIds = $modx->resource->get(\'id\');
    } else {
        return;
    }
}
$resourceIds = array_map(\'trim\', explode(\',\', $resourceIds));;
$contextKey = $modx->getOption(\'contextKey\', $scriptProperties, \'\', true);
if (empty($contextKey)) {
    $cultureKey = $modx->getOption(\'cultureKey\', $scriptProperties, \'\', true);
    $contextKey = $babel->getContextKey($cultureKey);
}
$showUnpublished = $modx->getOption(\'showUnpublished\', $scriptProperties, 0, true);

/* determine ids of translated resource */
$output = [];
foreach($resourceIds as $resourceId) {
    $linkedResource = $babel->getLinkedResources($resourceId);
    if (isset($linkedResource[$contextKey])) {
        $resource = $modx->getObject(\'modResource\', $linkedResource[$contextKey]);
        if ($resource && ($showUnpublished || $resource->get(\'published\') == 1)) {
            $output[] = $resource->get(\'id\');
        }
    }
}
return implode(\',\', $output);',
      'locked' => 0,
      'properties' => 'a:4:{s:10:"resourceId";a:7:{s:4:"name";s:10:"resourceId";s:4:"desc";s:27:"babeltranslation.resourceId";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:10:"contextKey";a:7:{s:4:"name";s:10:"contextKey";s:4:"desc";s:27:"babeltranslation.contextKey";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:10:"cultureKey";a:7:{s:4:"name";s:10:"cultureKey";s:4:"desc";s:27:"babeltranslation.cultureKey";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:32:"babeltranslation.showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:16:"babel:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Babel
 *
 * Copyright 2010 by Jakob Class <jakob.class@class-zec.de>
 *
 * This file is part of Babel.
 *
 * Babel is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Babel is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Babel; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package babel
 */
/**
 * BabelTranslation snippet to get the id of a translated resource in a given context.
 *
 * @author Jakob Class <jakob.class@class-zec.de>
 *
 * @package babel
 *
 * @param resourceId		optional: id of resource of which a translated resource should be determined. Default: current resource
 * @param contextKey		optional: Key of context in which translated resource should be determined.
 * @param cultureKey		optional: Key of culture in which translated resource should be determined. Used only in case contextKey was not specified.  If both omitted: uses currently set cultureKey.
 * @param showUnpublished	optional: flag whether to show unpublished translations. Default: 0
 */
$babel = $modx->getService(\'babel\', \'Babel\', $modx->getOption(\'babel.core_path\', null, $modx->getOption(\'core_path\').\'components/babel/\').\'model/babel/\', $scriptProperties);

/* be sure babel and babel TV is loaded */
if (!($babel instanceof Babel) || !$babel->babelTv)
    return;

/* get snippet properties */
$resourceIds = $modx->getOption(\'resourceId\', $scriptProperties);
if (empty($resourceIds)) {
    if (!empty($modx->resource) && is_object($modx->resource)) {
        $resourceIds = $modx->resource->get(\'id\');
    } else {
        return;
    }
}
$resourceIds = array_map(\'trim\', explode(\',\', $resourceIds));;
$contextKey = $modx->getOption(\'contextKey\', $scriptProperties, \'\', true);
if (empty($contextKey)) {
    $cultureKey = $modx->getOption(\'cultureKey\', $scriptProperties, \'\', true);
    $contextKey = $babel->getContextKey($cultureKey);
}
$showUnpublished = $modx->getOption(\'showUnpublished\', $scriptProperties, 0, true);

/* determine ids of translated resource */
$output = [];
foreach($resourceIds as $resourceId) {
    $linkedResource = $babel->getLinkedResources($resourceId);
    if (isset($linkedResource[$contextKey])) {
        $resource = $modx->getObject(\'modResource\', $linkedResource[$contextKey]);
        if ($resource && ($showUnpublished || $resource->get(\'published\') == 1)) {
            $output[] = $resource->get(\'id\');
        }
    }
}
return implode(\',\', $output);',
    ),
  ),
  'dd2b4848c8bb3c631fce4dabf3d1c873' => 
  array (
    'criteria' => 
    array (
      'name' => 'Babel',
    ),
    'object' => 
    array (
      'id' => 32,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Babel',
      'description' => 'Links and synchronizes multilingual resources.',
      'editor_type' => 0,
      'category' => 35,
      'cache_type' => 0,
      'plugincode' => '/**
 * Babel
 *
 * Copyright 2010 by Jakob Class <jakob.class@class-zec.de>
 *
 * This file is part of Babel.
 *
 * Babel is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Babel is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Babel; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package babel
 */
/**
 * Babel Plugin to link and synchronize multilingual resources
 *
 * Based on ideas of Sylvain Aerni <enzyms@gmail.com>
 *
 * Events:
 * OnDocFormPrerender,OnDocFormSave,OnEmptyTrash,OnContextRemove,OnResourceDuplicate
 *
 * @author Jakob Class <jakob.class@class-zec.de>
 *         goldsky <goldsky@virtudraft.com>
 *
 * @package babel
 *
 */
$babel = $modx->getService(\'babel\', \'Babel\', $modx->getOption(\'babel.core_path\', null, $modx->getOption(\'core_path\').\'components/babel/\').\'model/babel/\');

/* be sure babel TV is loaded */
if (!($babel instanceof Babel) || !$babel->babelTv)
    return;

switch ($modx->event->name) {
    case \'OnDocFormPrerender\':
        $output       = \'\';
        $errorMessage = \'\';
        $resource     = & $modx->event->params[\'resource\'];
        if (!$resource) {
            /* a new resource is being to created
             * -> skip rendering the babel box */
            break;
        }
        $linkedResources = $babel->getLinkedResources($resource->get(\'id\'));
        if (empty($linkedResources)) {
            /* always be sure that the Babel TV is set */
            $babel->initBabelTv($resource);
        }

        /* create babel-box with links to translations */
        $outputLanguageItems = \'\';
        if (!$modx->lexicon) {
            $modx->getService(\'lexicon\', \'modLexicon\');
        }
        $languagesStore = [];
        $contextKeys    = $babel->getGroupContextKeys($resource->get(\'context_key\'));
        foreach ($contextKeys as $contextKey) {
            /* for each (valid/existing) context of the context group a button will be displayed */
            $context = $modx->getObject(\'modContext\', [\'key\' => $contextKey]);
            if (!$context) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load context: \'.$contextKey);
                continue;
            }
            $context->prepare();
            $cultureKey       = $context->getOption(\'cultureKey\', $modx->getOption(\'cultureKey\'));
            $languagesStore[] = [$modx->lexicon(\'babel.language_\'.$cultureKey)." ($contextKey)", $contextKey];
        }

        $babel->config[\'context_key\']    = $resource->get(\'context_key\');
        $babel->config[\'languagesStore\'] = $languagesStore;
        $babel->config[\'menu\']           = $babel->getMenu($resource);
        if (empty($babel->config[\'menu\'])) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Babel] Could not load menu for context key: "\'.$babel->config[\'context_key\'].\'". Try to check "babel.contextKeys" in System Settings. If this is intended, you can ignore this warning.\');
            return;
        }
        $version         = str_replace(\' \', \'\', $babel->config[\'version\']);
        $isCSSCompressed = $modx->getOption(\'compress_css\');
        $withVersion     = $isCSSCompressed ? \'\' : \'?v=\'.$version;
        $modx->controller->addCss($babel->config[\'cssUrl\'].\'babel.css\'.$withVersion);

        $modx->controller->addLexiconTopic(\'babel:default\');
        $isJsCompressed = $modx->getOption(\'compress_js\');
        $withVersion    = $isJsCompressed ? \'\' : \'?v=\'.$version;
        $modx->controller->addJavascript($babel->config[\'jsUrl\'].\'babel.class.js\'.$withVersion);
        $modx->controller->addHtml(\'
<script type="text/javascript">
    Ext.onReady(function () {
        var babel = new Babel(\'.json_encode($babel->config).\');
        babel.getMenu(babel.config.menu);
    });
</script>\');
        break;

    case \'OnDocFormSave\':
        $resource = & $modx->event->params[\'resource\'];
        if (!$resource) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'No resource provided for OnDocFormSave event\');
            break;
        }
        if ($modx->event->params[\'mode\'] == modSystemEvent::MODE_NEW) {
            /* no TV synchronization for new resources, just init Babel TV */
            $babel->initBabelTv($resource);
            break;
        }
        $babel->synchronizeTvs($resource->get(\'id\'));
        break;

    case \'OnEmptyTrash\':
        /* remove translation links to non-existing resources */
        $deletedResourceIds = & $modx->event->params[\'ids\'];
        if (is_array($deletedResourceIds)) {
            foreach ($deletedResourceIds as $deletedResourceId) {
                $babel->removeLanguageLinksToResource($deletedResourceId);
            }
        }
        break;

    case \'OnContextRemove\':
        /* remove translation links to non-existing contexts */
        $context = & $modx->event->params[\'context\'];
        if ($context) {
            $babel->removeLanguageLinksToContext($context->get(\'key\'));
        }
        break;

    case \'OnResourceDuplicate\':
        /* init Babel TV of duplicated resources */
        $resource = & $modx->event->params[\'newResource\'];
        $babel->initBabelTvsRecursive($modx, $babel, $resource->get(\'id\'));
        break;

    case \'OnResourceSort\':
        $nodesAffected = & $modx->event->params[\'nodesAffected\'];
        foreach ($nodesAffected as $node) {
            $linkedResources = $babel->getLinkedResources($node->get(\'id\'));
            foreach ($linkedResources as $key => $id) {
                if ($id === $node->get(\'id\')) {
                    unset($linkedResources[$key]);
                }
            }
            $linkedResources[$node->get(\'context_key\')] = $node->get(\'id\');
            $babel->updateBabelTv($linkedResources, $linkedResources);
        }

        break;

    case \'OnSiteRefresh\':
        $cacheManager = $modx->getCacheManager();
        $cacheManager->refresh([
            \'babel\' => [],
                               ]);
        break;

    default:
        break;
}
return;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Babel
 *
 * Copyright 2010 by Jakob Class <jakob.class@class-zec.de>
 *
 * This file is part of Babel.
 *
 * Babel is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Babel is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Babel; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package babel
 */
/**
 * Babel Plugin to link and synchronize multilingual resources
 *
 * Based on ideas of Sylvain Aerni <enzyms@gmail.com>
 *
 * Events:
 * OnDocFormPrerender,OnDocFormSave,OnEmptyTrash,OnContextRemove,OnResourceDuplicate
 *
 * @author Jakob Class <jakob.class@class-zec.de>
 *         goldsky <goldsky@virtudraft.com>
 *
 * @package babel
 *
 */
$babel = $modx->getService(\'babel\', \'Babel\', $modx->getOption(\'babel.core_path\', null, $modx->getOption(\'core_path\').\'components/babel/\').\'model/babel/\');

/* be sure babel TV is loaded */
if (!($babel instanceof Babel) || !$babel->babelTv)
    return;

switch ($modx->event->name) {
    case \'OnDocFormPrerender\':
        $output       = \'\';
        $errorMessage = \'\';
        $resource     = & $modx->event->params[\'resource\'];
        if (!$resource) {
            /* a new resource is being to created
             * -> skip rendering the babel box */
            break;
        }
        $linkedResources = $babel->getLinkedResources($resource->get(\'id\'));
        if (empty($linkedResources)) {
            /* always be sure that the Babel TV is set */
            $babel->initBabelTv($resource);
        }

        /* create babel-box with links to translations */
        $outputLanguageItems = \'\';
        if (!$modx->lexicon) {
            $modx->getService(\'lexicon\', \'modLexicon\');
        }
        $languagesStore = [];
        $contextKeys    = $babel->getGroupContextKeys($resource->get(\'context_key\'));
        foreach ($contextKeys as $contextKey) {
            /* for each (valid/existing) context of the context group a button will be displayed */
            $context = $modx->getObject(\'modContext\', [\'key\' => $contextKey]);
            if (!$context) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load context: \'.$contextKey);
                continue;
            }
            $context->prepare();
            $cultureKey       = $context->getOption(\'cultureKey\', $modx->getOption(\'cultureKey\'));
            $languagesStore[] = [$modx->lexicon(\'babel.language_\'.$cultureKey)." ($contextKey)", $contextKey];
        }

        $babel->config[\'context_key\']    = $resource->get(\'context_key\');
        $babel->config[\'languagesStore\'] = $languagesStore;
        $babel->config[\'menu\']           = $babel->getMenu($resource);
        if (empty($babel->config[\'menu\'])) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Babel] Could not load menu for context key: "\'.$babel->config[\'context_key\'].\'". Try to check "babel.contextKeys" in System Settings. If this is intended, you can ignore this warning.\');
            return;
        }
        $version         = str_replace(\' \', \'\', $babel->config[\'version\']);
        $isCSSCompressed = $modx->getOption(\'compress_css\');
        $withVersion     = $isCSSCompressed ? \'\' : \'?v=\'.$version;
        $modx->controller->addCss($babel->config[\'cssUrl\'].\'babel.css\'.$withVersion);

        $modx->controller->addLexiconTopic(\'babel:default\');
        $isJsCompressed = $modx->getOption(\'compress_js\');
        $withVersion    = $isJsCompressed ? \'\' : \'?v=\'.$version;
        $modx->controller->addJavascript($babel->config[\'jsUrl\'].\'babel.class.js\'.$withVersion);
        $modx->controller->addHtml(\'
<script type="text/javascript">
    Ext.onReady(function () {
        var babel = new Babel(\'.json_encode($babel->config).\');
        babel.getMenu(babel.config.menu);
    });
</script>\');
        break;

    case \'OnDocFormSave\':
        $resource = & $modx->event->params[\'resource\'];
        if (!$resource) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'No resource provided for OnDocFormSave event\');
            break;
        }
        if ($modx->event->params[\'mode\'] == modSystemEvent::MODE_NEW) {
            /* no TV synchronization for new resources, just init Babel TV */
            $babel->initBabelTv($resource);
            break;
        }
        $babel->synchronizeTvs($resource->get(\'id\'));
        break;

    case \'OnEmptyTrash\':
        /* remove translation links to non-existing resources */
        $deletedResourceIds = & $modx->event->params[\'ids\'];
        if (is_array($deletedResourceIds)) {
            foreach ($deletedResourceIds as $deletedResourceId) {
                $babel->removeLanguageLinksToResource($deletedResourceId);
            }
        }
        break;

    case \'OnContextRemove\':
        /* remove translation links to non-existing contexts */
        $context = & $modx->event->params[\'context\'];
        if ($context) {
            $babel->removeLanguageLinksToContext($context->get(\'key\'));
        }
        break;

    case \'OnResourceDuplicate\':
        /* init Babel TV of duplicated resources */
        $resource = & $modx->event->params[\'newResource\'];
        $babel->initBabelTvsRecursive($modx, $babel, $resource->get(\'id\'));
        break;

    case \'OnResourceSort\':
        $nodesAffected = & $modx->event->params[\'nodesAffected\'];
        foreach ($nodesAffected as $node) {
            $linkedResources = $babel->getLinkedResources($node->get(\'id\'));
            foreach ($linkedResources as $key => $id) {
                if ($id === $node->get(\'id\')) {
                    unset($linkedResources[$key]);
                }
            }
            $linkedResources[$node->get(\'context_key\')] = $node->get(\'id\');
            $babel->updateBabelTv($linkedResources, $linkedResources);
        }

        break;

    case \'OnSiteRefresh\':
        $cacheManager = $modx->getCacheManager();
        $cacheManager->refresh([
            \'babel\' => [],
                               ]);
        break;

    default:
        break;
}
return;',
    ),
  ),
  '269b4a6a61e640a00abfeca33fee3576' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 32,
      'event' => 'OnDocFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 32,
      'event' => 'OnDocFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '5e836befa806967bf8d4ee99de8ccbd6' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 32,
      'event' => 'OnDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 32,
      'event' => 'OnDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'de6449c53428109c75e8e5a79d4cb4df' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 32,
      'event' => 'OnEmptyTrash',
    ),
    'object' => 
    array (
      'pluginid' => 32,
      'event' => 'OnEmptyTrash',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '2bea79207e1ca77569270e8691b22935' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 32,
      'event' => 'OnContextRemove',
    ),
    'object' => 
    array (
      'pluginid' => 32,
      'event' => 'OnContextRemove',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '3aa1030c6ef380e52e28b9032863ba1f' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 32,
      'event' => 'OnResourceDuplicate',
    ),
    'object' => 
    array (
      'pluginid' => 32,
      'event' => 'OnResourceDuplicate',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'cd6bcfd279983d7674d33021f832541c' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 32,
      'event' => 'OnResourceSort',
    ),
    'object' => 
    array (
      'pluginid' => 32,
      'event' => 'OnResourceSort',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '17ff9602d8b470612341811b060fa8b0' => 
  array (
    'criteria' => 
    array (
      'text' => 'babel',
    ),
    'object' => 
    array (
      'text' => 'babel',
      'parent' => 'components',
      'action' => 'index',
      'description' => 'babel.desc',
      'icon' => '',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'babel',
    ),
  ),
);