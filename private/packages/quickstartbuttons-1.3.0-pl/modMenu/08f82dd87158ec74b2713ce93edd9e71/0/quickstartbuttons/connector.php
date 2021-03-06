<?php

require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$corePath = $modx->getOption('quickstartbuttons.core_path',null,$modx->getOption('core_path').'components/quickstartbuttons/');
require_once $corePath.'model/quickstartbuttons/quickstartbuttons.class.php';

$modx->quickstartbuttons = new QuickstartButtons($modx);
$modx->lexicon->load('quickstartbuttons:default');

// when not is in a manager context; and action isset, set some params to give access
if($modx->context->get('key') != 'mgr' && !empty($_REQUEST['action'])) {
    $_SERVER['HTTP_MODAUTH'] = $modx->site_id;
	$_SESSION['modx.'.$modx->context->get('key').'.user.token'] = $modx->site_id;
}

// figure out wich path we want to load the action from
$cp = 'processorsPath';
if(isset($_REQUEST['cp']) && !empty($_REQUEST['cp']) && array_key_exists($_REQUEST['cp'], $modx->quickstartbuttons->config)) {
	$cp = $_REQUEST['cp'];
}

/* handle request */
$path = $modx->getOption($cp, $modx->quickstartbuttons->config, $corePath.'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));