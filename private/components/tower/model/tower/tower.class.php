<?php
/**
 * @package Tower
 */
class Tower {

    public $modx;

    /**
     * Tower constructor
     *
     * @param MODX A reference to the MODX instance.
     */
     public function __construct(modX &$modx, array $config = array())
     {
        // init modx
        $this->modx = & $modx;

        // add addPackage
        $basePath = $this->modx->getOption('tower.core_path',$config,$this->modx->getOption('core_path').'components/tower/');
        $assetsUrl = $this->modx->getOption('tower.assets_url',$config,$this->modx->getOption('assets_url').'components/tower/');
        $this->config = array_merge(array(
            'basePath' => $basePath,
            'corePath' => $basePath,
            'modelPath' => $basePath . 'model/',
            'processorsPath' => $basePath . 'processors/',
            'templatesPath' => $basePath . 'templates/',
            'chunksPath' => $basePath . 'elements/chunks/',
            'jsUrl' => $assetsUrl . 'js/',
            'cssUrl' => $assetsUrl . 'css/',
            'assetsUrl' => $assetsUrl,
            'connectorUrl' => $assetsUrl . 'connector.php',
        ), $config);

        $this->modx->addPackage('tower', $this->config['modelPath']);
    }


    public function getData()
    {
        $data = array();

        // MODX infos
        $data['version'] = include MODX_CORE_PATH . 'docs/version.inc.php';
        $data['manager_url'] = $this->modx->getOption('manager_url');
        $data['core_outside_root'] = strpos(MODX_CORE_PATH, MODX_BASE_PATH) === false;
        $data['base_url'] = MODX_BASE_URL;
        $errorFile = $this->modx->getOption('cache_path') . 'logs/error.log';
        $data['error_log_size'] = file_exists($errorFile) ? filesize($errorFile) : 0;

        // server infos
        $data['php_version'] = PHP_VERSION;
        $data['disk_free_space'] = @disk_free_space(MODX_BASE_PATH);
        $data['disk_total_space'] = @disk_total_space(MODX_BASE_PATH);

        // user infos
        $data['users'] = $this->modx->getCount('modUser');
        $data['users_sudo'] = $this->modx->getCount('modUser', ['sudo' => true]);
        $data['users_sudo_usernames'] = [];
        $sudos = $this->modx->getCollection('modUser', ['sudo' => true]);
        foreach ($sudos as $sudo) {
            $data['users_sudo_usernames'][] = $sudo->get('username');
        }

        return $data;
    }

}
