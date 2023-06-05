<?php return array (
  'f2e270b7aad8de9c8590a2c34ef19326' => 
  array (
    'criteria' => 
    array (
      'name' => 'easycart',
    ),
    'object' => 
    array (
      'name' => 'easycart',
      'path' => '{core_path}components/easycart/',
      'assets_path' => '{assets_path}components/easycart/',
    ),
  ),
  '5d9b1c94dfb251298386e75950bd0257' => 
  array (
    'criteria' => 
    array (
      'key' => 'easycart.shop_id',
    ),
    'object' => 
    array (
      'key' => 'easycart.shop_id',
      'value' => '2527',
      'xtype' => 'textfield',
      'namespace' => 'easycart',
      'area' => 'api',
      'editedon' => '2021-02-20 19:39:35',
    ),
  ),
  'd2c2930520fd33c0c5799697e2f6a55e' => 
  array (
    'criteria' => 
    array (
      'key' => 'easycart.api_key',
    ),
    'object' => 
    array (
      'key' => 'easycart.api_key',
      'value' => 'O1EQQb3gKIFYIyAPSULWacPVbOhnppHUMZqY4BedgmcxsxMIE9s0ERtjKbBOT7PIjptn3twUYPpgvTI0vOiShZOlB4jOau9f2rNcWxD9KyptHRcfScrfS5Cn',
      'xtype' => 'textfield',
      'namespace' => 'easycart',
      'area' => 'api',
      'editedon' => '2021-02-20 19:39:22',
    ),
  ),
  'dbf0ba962bfac3f3222119205a30900a' => 
  array (
    'criteria' => 
    array (
      'category' => 'easyCart',
    ),
    'object' => 
    array (
      'id' => 31,
      'parent' => 0,
      'category' => 'easyCart',
      'rank' => 0,
    ),
  ),
  '08992798cc2c1874fe4b37b716d5c2e9' => 
  array (
    'criteria' => 
    array (
      'name' => 'easycartAddToCart',
    ),
    'object' => 
    array (
      'id' => 65,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'easycartAddToCart',
      'description' => '',
      'editor_type' => 0,
      'category' => 31,
      'cache_type' => 0,
      'snippet' => '/*
 * easycartAddToCart
 *
 * Snippet to add Products to cart
 *
 * Usage examples:
 * [[easycartAddToCart? &sku=`123` ...]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

if (empty($_REQUEST[\'add_to_cart\'])) return;

$corePath = $modx->getOption(\'easycart.core_path\', null, $modx->getOption(\'core_path\') . \'components/easycart/\');
$easycart = $modx->getService(\'easycart\', \'easycart\', $corePath . \'model/easycart/\', array(
    \'core_path\' => $corePath
));

// properties
$sku = $modx->getOption(\'sku\', $scriptProperties);
$price = $modx->getOption(\'price\', $scriptProperties);
$title = $modx->getOption(\'title\', $scriptProperties);
$quantity = $modx->getOption(\'quantity\', $scriptProperties, ($_REQUEST[\'quantity\'] ? $_REQUEST[\'quantity\'] : 1), true);
$quantity_unit = $modx->getOption(\'quantityUnit\', $scriptProperties, 1, true);
$quantity_max = $modx->getOption(\'quantityMax\', $scriptProperties);
$tax = $modx->getOption(\'tax\', $scriptProperties, 0, true);
$redirect = $modx->getOption(\'redirect\', $scriptProperties, false, true);
$image = $modx->getOption(\'image\', $scriptProperties);
$description = $modx->getOption(\'description\', $scriptProperties);
$url = $modx->getOption(\'url\', $scriptProperties);
$data = $modx->getOption(\'data\', $scriptProperties);
$attributes = $modx->getOption(\'attributes\', $scriptProperties);


// format data
if (!empty($data)) {
    $dataArray = explode(\'||\', $data);
    $data = array();

    foreach ($dataArray as $item) {
        $array = explode(\'==\', $item);
        $data[$array[0]] = $array[1];
    }

    $properties[\'data\'] = $data;
}

// format attributes
if (!empty($attributes)) {
    $attributesArray = explode(\'||\', $attributes);
    $attributes = array();

    foreach ($attributesArray as $item) {
        $array = explode(\'==\', $item);
        $attributes[] = array(
            \'title\' => $array[0],
            \'value\' => $array[1],
        );
    }

    $properties[\'attributes\'] = $attributes;
}


// add product to cart
$ec = new easyCart($modx);
$order = $ec->apiRequest(\'orderitem\', "POST", array(
    \'order\' => $_SESSION[\'order\'],
    \'sku\' => $sku,
    \'price\' => $price,
    \'title\' => $title,
    \'quantity\' => $quantity,
    \'quantity_unit\' => $quantity_unit,
    \'quantity_max\' => $quantity_max,
    \'tax\' => $tax,
    \'image\' => $image,
    \'description\' => $description,
    \'url\' => $url,
    \'properties\' => json_encode($properties),
));

// if item is addet to cart
if (!$order->id) {

    // set error message
    $modx->toPlaceholders(array(
        \'message\' => \'Fehler: Das Produkt konnte nicht hinzugefügt werden.\',
    ),\'easycart\');

    $modx->log(xPDO::LOG_LEVEL_ERROR, \'[easyCart] Could not add Item to Cart via API\' . json_encode($order->message));

    return;
}

// set cart id to session to add more items
$_SESSION[\'order\'] = $order->id;

// url to cart
$url = \'//\' . $order->shop->host . \'/cart/\' . $order->id;

// Set Message to placeholder
$modx->toPlaceholders(array(
    \'message\' => \'Das Produkt wurde dem Warenkorb hinzugefügt.\',
    \'order\' => $order->id,
    \'url\' => $url,
),\'easycart\');

// redirect to Cart
if ($redirect != false) {
    $modx->sendRedirect($url);
}

return;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/*
 * easycartAddToCart
 *
 * Snippet to add Products to cart
 *
 * Usage examples:
 * [[easycartAddToCart? &sku=`123` ...]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

if (empty($_REQUEST[\'add_to_cart\'])) return;

$corePath = $modx->getOption(\'easycart.core_path\', null, $modx->getOption(\'core_path\') . \'components/easycart/\');
$easycart = $modx->getService(\'easycart\', \'easycart\', $corePath . \'model/easycart/\', array(
    \'core_path\' => $corePath
));

// properties
$sku = $modx->getOption(\'sku\', $scriptProperties);
$price = $modx->getOption(\'price\', $scriptProperties);
$title = $modx->getOption(\'title\', $scriptProperties);
$quantity = $modx->getOption(\'quantity\', $scriptProperties, ($_REQUEST[\'quantity\'] ? $_REQUEST[\'quantity\'] : 1), true);
$quantity_unit = $modx->getOption(\'quantityUnit\', $scriptProperties, 1, true);
$quantity_max = $modx->getOption(\'quantityMax\', $scriptProperties);
$tax = $modx->getOption(\'tax\', $scriptProperties, 0, true);
$redirect = $modx->getOption(\'redirect\', $scriptProperties, false, true);
$image = $modx->getOption(\'image\', $scriptProperties);
$description = $modx->getOption(\'description\', $scriptProperties);
$url = $modx->getOption(\'url\', $scriptProperties);
$data = $modx->getOption(\'data\', $scriptProperties);
$attributes = $modx->getOption(\'attributes\', $scriptProperties);


// format data
if (!empty($data)) {
    $dataArray = explode(\'||\', $data);
    $data = array();

    foreach ($dataArray as $item) {
        $array = explode(\'==\', $item);
        $data[$array[0]] = $array[1];
    }

    $properties[\'data\'] = $data;
}

// format attributes
if (!empty($attributes)) {
    $attributesArray = explode(\'||\', $attributes);
    $attributes = array();

    foreach ($attributesArray as $item) {
        $array = explode(\'==\', $item);
        $attributes[] = array(
            \'title\' => $array[0],
            \'value\' => $array[1],
        );
    }

    $properties[\'attributes\'] = $attributes;
}


// add product to cart
$ec = new easyCart($modx);
$order = $ec->apiRequest(\'orderitem\', "POST", array(
    \'order\' => $_SESSION[\'order\'],
    \'sku\' => $sku,
    \'price\' => $price,
    \'title\' => $title,
    \'quantity\' => $quantity,
    \'quantity_unit\' => $quantity_unit,
    \'quantity_max\' => $quantity_max,
    \'tax\' => $tax,
    \'image\' => $image,
    \'description\' => $description,
    \'url\' => $url,
    \'properties\' => json_encode($properties),
));

// if item is addet to cart
if (!$order->id) {

    // set error message
    $modx->toPlaceholders(array(
        \'message\' => \'Fehler: Das Produkt konnte nicht hinzugefügt werden.\',
    ),\'easycart\');

    $modx->log(xPDO::LOG_LEVEL_ERROR, \'[easyCart] Could not add Item to Cart via API\' . json_encode($order->message));

    return;
}

// set cart id to session to add more items
$_SESSION[\'order\'] = $order->id;

// url to cart
$url = \'//\' . $order->shop->host . \'/cart/\' . $order->id;

// Set Message to placeholder
$modx->toPlaceholders(array(
    \'message\' => \'Das Produkt wurde dem Warenkorb hinzugefügt.\',
    \'order\' => $order->id,
    \'url\' => $url,
),\'easycart\');

// redirect to Cart
if ($redirect != false) {
    $modx->sendRedirect($url);
}

return;',
    ),
  ),
  '31edeab5ccef9fdb2726fe9ed61daddb' => 
  array (
    'criteria' => 
    array (
      'name' => 'easycartGetCart',
    ),
    'object' => 
    array (
      'id' => 66,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'easycartGetCart',
      'description' => '',
      'editor_type' => 0,
      'category' => 31,
      'cache_type' => 0,
      'snippet' => '/*
 * easycartGetCart
 *
 * Snippet to get cart items
 *
 * Usage examples:
 * [[easycartGetCart? ...]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

$corePath = $modx->getOption(\'easycart.core_path\', null, $modx->getOption(\'core_path\') . \'components/easycart/\');
$easycart = $modx->getService(\'easycart\', \'easycart\', $corePath . \'model/easycart/\', array(
    \'core_path\' => $corePath
));

// properties
// ...


if (empty($_SESSION[\'order\'])) {
    $modx->toPlaceholders(array(
        \'total_quantity\' => 0,
    ),\'easycart\');

    return;
}

// get items
$ec = new easyCart($modx);
$request = $ec->apiRequest(\'order/\' . $_SESSION[\'order\']);
$order = $request->data;

// if no order exists
if (!$order->id or $order->status >= 3) {
    $modx->toPlaceholders(array(
        \'total_quantity\' => 0,
    ),\'easycart\');

    unset($_SESSION[\'order\']);

    return;
}

// set placeholders
$modx->toPlaceholders(array(
    \'total_quantity\' => $order->total_quantity,
),\'easycart\');

return;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/*
 * easycartGetCart
 *
 * Snippet to get cart items
 *
 * Usage examples:
 * [[easycartGetCart? ...]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

$corePath = $modx->getOption(\'easycart.core_path\', null, $modx->getOption(\'core_path\') . \'components/easycart/\');
$easycart = $modx->getService(\'easycart\', \'easycart\', $corePath . \'model/easycart/\', array(
    \'core_path\' => $corePath
));

// properties
// ...


if (empty($_SESSION[\'order\'])) {
    $modx->toPlaceholders(array(
        \'total_quantity\' => 0,
    ),\'easycart\');

    return;
}

// get items
$ec = new easyCart($modx);
$request = $ec->apiRequest(\'order/\' . $_SESSION[\'order\']);
$order = $request->data;

// if no order exists
if (!$order->id or $order->status >= 3) {
    $modx->toPlaceholders(array(
        \'total_quantity\' => 0,
    ),\'easycart\');

    unset($_SESSION[\'order\']);

    return;
}

// set placeholders
$modx->toPlaceholders(array(
    \'total_quantity\' => $order->total_quantity,
),\'easycart\');

return;',
    ),
  ),
  '510e1e7699ee2716ba4b25cd33d5a672' => 
  array (
    'criteria' => 
    array (
      'text' => 'easycart.menu',
    ),
    'object' => 
    array (
      'text' => 'easycart.menu',
      'parent' => 'components',
      'action' => 'home',
      'description' => 'easycart.menu_desc',
      'icon' => '',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'easycart',
    ),
  ),
);