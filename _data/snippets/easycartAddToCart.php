id: 65
name: easycartAddToCart
category: easyCart
properties: 'a:0:{}'

-----

/*
 * easycartAddToCart
 *
 * Snippet to add Products to cart
 *
 * Usage examples:
 * [[easycartAddToCart? &sku=`123` ...]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

if (empty($_REQUEST['add_to_cart'])) return;

$corePath = $modx->getOption('easycart.core_path', null, $modx->getOption('core_path') . 'components/easycart/');
$easycart = $modx->getService('easycart', 'easycart', $corePath . 'model/easycart/', array(
    'core_path' => $corePath
));

// properties
$sku = $modx->getOption('sku', $scriptProperties);
$price = $modx->getOption('price', $scriptProperties);
$title = $modx->getOption('title', $scriptProperties);
$quantity = $modx->getOption('quantity', $scriptProperties, ($_REQUEST['quantity'] ? $_REQUEST['quantity'] : 1), true);
$quantity_unit = $modx->getOption('quantityUnit', $scriptProperties, 1, true);
$quantity_max = $modx->getOption('quantityMax', $scriptProperties);
$tax = $modx->getOption('tax', $scriptProperties, 0, true);
$redirect = $modx->getOption('redirect', $scriptProperties, false, true);
$image = $modx->getOption('image', $scriptProperties);
$description = $modx->getOption('description', $scriptProperties);
$url = $modx->getOption('url', $scriptProperties);
$data = $modx->getOption('data', $scriptProperties);
$attributes = $modx->getOption('attributes', $scriptProperties);


// format data
if (!empty($data)) {
    $dataArray = explode('||', $data);
    $data = array();

    foreach ($dataArray as $item) {
        $array = explode('==', $item);
        $data[$array[0]] = $array[1];
    }

    $properties['data'] = $data;
}

// format attributes
if (!empty($attributes)) {
    $attributesArray = explode('||', $attributes);
    $attributes = array();

    foreach ($attributesArray as $item) {
        $array = explode('==', $item);
        $attributes[] = array(
            'title' => $array[0],
            'value' => $array[1],
        );
    }

    $properties['attributes'] = $attributes;
}


// add product to cart
$ec = new easyCart($modx);
$order = $ec->apiRequest('orderitem', "POST", array(
    'order' => $_SESSION['order'],
    'sku' => $sku,
    'price' => $price,
    'title' => $title,
    'quantity' => $quantity,
    'quantity_unit' => $quantity_unit,
    'quantity_max' => $quantity_max,
    'tax' => $tax,
    'image' => $image,
    'description' => $description,
    'url' => $url,
    'properties' => json_encode($properties),
));

// if item is addet to cart
if (!$order->id) {

    // set error message
    $modx->toPlaceholders(array(
        'message' => 'Fehler: Das Produkt konnte nicht hinzugefügt werden.',
    ),'easycart');

    $modx->log(xPDO::LOG_LEVEL_ERROR, '[easyCart] Could not add Item to Cart via API' . json_encode($order->message));

    return;
}

// set cart id to session to add more items
$_SESSION['order'] = $order->id;

// url to cart
$url = '//' . $order->shop->host . '/cart/' . $order->id;

// Set Message to placeholder
$modx->toPlaceholders(array(
    'message' => 'Das Produkt wurde dem Warenkorb hinzugefügt.',
    'order' => $order->id,
    'url' => $url,
),'easycart');

// redirect to Cart
if ($redirect != false) {
    $modx->sendRedirect($url);
}

return;