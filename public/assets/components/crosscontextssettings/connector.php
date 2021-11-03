<?php
/**
 * CrossContextsSettings connector
 *
 * @package crosscontextssettings
 * @subpackage connector
 *
 * @var modX $modx
 */

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';

$corePath = $modx->getOption('crosscontextssettings.core_path', null, $modx->getOption('core_path') . 'components/crosscontextssettings/');
$crosscontextssettings = $modx->getService('crosscontextssettings', 'CrossContextsSettings', $corePath . 'model/crosscontextssettings/', array(
    'core_path' => $corePath
));

// Handle request
$modx->request->handleRequest(array(
    'processors_path' => $crosscontextssettings->getOption('processorsPath'),
    'location' => ''
));
