<?php
/*
 * easycartGetOrder
 *
 * Snippet to get order
 *
 * Usage examples:
 * [[easycartGetOrder? ...]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

$corePath = $modx->getOption('easycart.core_path', null, $modx->getOption('core_path') . 'components/easycart/');
$easycart = $modx->getService('easycart', 'easycart', $corePath . 'model/easycart/', array(
    'core_path' => $corePath
));

// properties
$orderId = $modx->getOption('order', $scriptProperties, $_REQUEST['order']);
$tplProducts = $modx->getOption('tplProducts', $scriptProperties, 'easycartProductTpl');

// break
if (empty($orderId)) return;


// get items
$ec = new easyCart($modx);
$request = $ec->apiRequest('order/' . $orderId);
$order = $request->data;

// if no order exists
if (!$order->id) {
    $modx->log(1, 'Could not get Order with ID: ' . $orderId);
    return;
}

// templating product items
$outputProducts = '';

foreach ($order->items as $item) {
    $item->properties = json_decode($item->properties);
    $outputProducts .= $modx->getChunk($tplProducts, (array) $item);
}

// set placeholders
$modx->toPlaceholders(array_merge((array) $order, array(
    'items' => $outputProducts,
)), 'easycart.order');

return;