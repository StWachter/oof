<?php
/**
 * easyCart connector
 *
 * @package easycart
 * @subpackage connector
 *
 * @var modX $modx
 */
 
 define('MODX_REQP',false); // only for development

 require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
 require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
 require_once MODX_CONNECTORS_PATH . 'index.php';

 $corePath = $modx->getOption('easycart.core_path', null, $modx->getOption('core_path') . 'components/easycart/');
 $easycart = $modx->getService('easycart', 'EasyCart', $corePath . 'model/easycart/', array(
     'core_path' => $corePath
 ));

  // Set HTTP_MODAUTH for web processors
 if (defined('MODX_REQP') && MODX_REQP === false) {
     $_SERVER['HTTP_MODAUTH'] = $modx->user->getUserToken('mgr');
 }

 // Handle request
 $modx->request->handleRequest(array(
     'processors_path' => $modx->easycart->getOption('processorsPath'),
     'location' => ''
 ));
