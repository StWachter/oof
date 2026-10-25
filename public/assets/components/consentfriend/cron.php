<?php
/**
 * ConsentFriend cron connector
 *
 * @package consentfriend
 * @subpackage connector
 *
 * @var modX $modx
 */

define('MODX_REQP', false);

require_once dirname(__FILE__, 4) . '/config.core.php';
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';

$corePath = $modx->getOption('consentfriend.core_path', null, $modx->getOption('core_path') . 'components/consentfriend/');
/** @var ConsentFriend $consentfriend */
$consentfriend = $modx->getService('consentfriend', ConsentFriend::class, $corePath . 'model/consentfriend/', [
    'core_path' => $corePath
]);

$_SERVER['HTTP_MODAUTH'] = $modx->user->getUserToken($modx->context->get('key'));

// Set GET parameter in CLI mode
if (php_sapi_name() == 'cli') {
    parse_str(implode('&', array_slice($argv, 1)), $_GET);
}

// Handle request
$modx->request->handleRequest([
    'processors_path' => $consentfriend->getOption('processorsPath'),
    'location' => '',
    'action' => 'web/database/update'
]);
