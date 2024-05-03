<?php
/**
 * easyCart Classfile
 *
 * Copyright 2020 by Jan Dähne <jan.daehne@quadro-system.de>
 *
 * @package easycart
 * @subpackage classfile
 */

 /**
  * class EasyCart
  */
class EasyCart {

    /**
     * A reference to the modX instance
     * @var modX $modx
     */
    public $modx;

    /**
     * The namespace
     * @var string $namespace
     */
    public $namespace = 'cronmanager';

    /**
     * The class options
     * @var array $options
     */
    public $options = array();


    /**
     * The item informations
     * @var array $options
     */
    public $item = array();


    /**
     * EasyCart constructor
     *
     * @param modX $modx A reference to the modX instance.
     * @param array $options An array of options. Optional.
     */
    function __construct(modX &$modx, $options = array())
    {
        $this->modx = &$modx;
        $this->namespace = $this->getOption('namespace', $options, $this->namespace);

        $this->api_key = $this->modx->getOption('easycart.api_key');
        $this->shop_id = $this->modx->getOption('easycart.shop_id');

        $corePath = $this->getOption('core_path', $options, $this->modx->getOption('core_path') . 'components/' . $this->namespace . '/');
        $assetsPath = $this->getOption('assets_path', $options, $this->modx->getOption('assets_path') . 'components/' . $this->namespace . '/');
        $assetsUrl = $this->getOption('assets_url', $options, $this->modx->getOption('assets_url') . 'components/' . $this->namespace . '/');

        // Load some default paths for easier management
        $this->options = array_merge(array(
            'namespace' => $this->namespace,
            'version' => $this->version,
            'corePath' => $corePath,
            'modelPath' => $corePath . 'model/',
            'vendorPath' => $corePath . 'vendor/',
            'chunksPath' => $corePath . 'elements/chunks/',
            'pagesPath' => $corePath . 'elements/pages/',
            'snippetsPath' => $corePath . 'elements/snippets/',
            'pluginsPath' => $corePath . 'elements/plugins/',
            'controllersPath' => $corePath . 'controllers/',
            'processorsPath' => $corePath . 'processors/',
            'templatesPath' => $corePath . 'templates/',
            'assetsPath' => $assetsPath,
            'assetsUrl' => $assetsUrl,
            'jsUrl' => $assetsUrl . 'js/',
            'cssUrl' => $assetsUrl . 'css/',
            'imagesUrl' => $assetsUrl . 'images/',
            'connectorUrl' => $assetsUrl . 'connector.php'
        ), $options);

        $this->modx->addPackage($this->namespace, $this->getOption('modelPath'));
        $lexicon = $this->modx->getService('lexicon', 'modLexicon');
        $lexicon->load($this->namespace . ':default');
    }



    // API request
    public function apiRequest($route, $request = "GET", $data = array()) // $data
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://api.easycart.pro/api/' . $route);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $request);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "api-key: " . $this->api_key,
            "shop-id: " . $this->shop_id,
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response);
    }


    /**
     * Get a local configuration option or a namespaced system setting by key.
     *
     * @param string $key The option key to search for.
     * @param array $options An array of options that override local options.
     * @param mixed $default The default value returned if the option is not found locally or as a
     * namespaced system setting; by default this value is null.
     * @return mixed The option value or the default value specified.
     */
    public function getOption($key, $options = array(), $default = null)
    {
        $option = $default;
        if (!empty($key) && is_string($key)) {
            if ($options != null && array_key_exists($key, $options)) {
                $option = $options[$key];
            } elseif (array_key_exists($key, $this->options)) {
                $option = $this->options[$key];
            } elseif (array_key_exists("{$this->namespace}.{$key}", $this->modx->config)) {
                $option = $this->modx->getOption("{$this->namespace}.{$key}");
            }
        }
        return $option;
    }

    public function initialize($ctx = 'web')
    {
        switch ($ctx) {
            case 'mgr':
                $this->modx->lexicon->load('cronmanager:default');

                if (!$this->modx->loadClass('cronmanagerControllerRequest', $this->config['modelPath'] . 'cronmanager/request/', true, true)) {
                    return 'Could not load controller request handler.';
                }

                $this->request = new cronmanagerControllerRequest($this);

                return $this->request->handleRequest();
                break;
        }
        return true;
    }

    // pre Hooks
    /*
    public function runPreHooks($preHooks) {
        $hooks = explode(',', $preHooks);
        $status = true;

        foreach ($hooks as $hook) {
            $returnHook = $this->modx->runSnippet($hook, array());

            $status = ($returnHook == true) ? true : false;
        }

        return $status;
    }*/

    public function runPreHooks($preHooks) {
        $hooks = explode(',', $preHooks);
        $status = true;

        foreach ($hooks as $hook) {

            if (!$snippet = $this->modx->getObject('modSnippet', array('name' => $hook))) {
                $status = false;
            }

            $properties = array();
            $properties['hook'] =& $this;

            $status = $snippet->process($properties);
        }

        return $status;
    }

    // create Item
    public function createItem($data)
    {
        foreach ($data as $key => $value) {
            $this->item[$key] = $value;
        }

        return $this->item;
    }

    // get Item
    public function getItem()
    {
        return $this->item;
    }

    // set value
    public function setValue($key, $value)
    {
        $this->item[$key] = $value;
        return $this->item[$key];
    }

    // get value
    public function getValue($key)
    {
        return $this->item[$key];
    }

}
