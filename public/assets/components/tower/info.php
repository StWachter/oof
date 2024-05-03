<?php
/**
 * Tower info
 *
 * @package tower
 *
 * @var modX $modx
 */

// check if site key is empty
if (!array_key_exists('site-key', $_REQUEST)) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Missing authentication.']);
    exit();
}

// for access without authorization
define('MODX_REQP', false);

// initialize modx
require_once dirname(dirname(dirname(__DIR__))) . '/config.core.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
$modx = new modX();
$modx->initialize('mgr');

// check for correct site key
if ($modx->getOption('tower.site_key') != $_REQUEST['site-key'] or empty($modx->getOption('tower.site_key'))) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Missing authentication.']);
    exit();
}

// check for correct ip
if (!empty($modx->getOption('tower.ip_whitelist'))) {
    $ips = explode(',', $modx->getOption('tower.ip_whitelist'));
    if (!in_array($_SERVER['REMOTE_ADDR'], $ips)) {
        http_response_code(401);
        echo json_encode(['success' => false, 'message' => 'Missing authentication.']);
        exit();
    }
}

// initialize tower class
$corePath = $modx->getOption('tower.core_path', null, $modx->getOption('core_path') . 'components/tower/');
$tower = $modx->getService('tower', 'Tower', $corePath . 'model/tower/', array('core_path' => $corePath));

// get data
$data = $tower->getData();

// return data
echo json_encode(['success' => true, 'data' => $data]);
exit();
