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

if (empty($modx->getOption('add_to_cart', $scriptProperties, $_REQUEST['add_to_cart']))) return;

$corePath = $modx->getOption('easycart.core_path', null, $modx->getOption('core_path') . 'components/easycart/');
$easycart = $modx->getService('easycart', 'easycart', $corePath . 'model/easycart/', array(
    'core_path' => $corePath
));

// load lexicon
$modx->getService('lexicon', 'modLexicon');
$modx->lexicon->load('easycart:default');

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
$successMessage = $modx->getOption('successMessage', $scriptProperties, $modx->lexicon('easycart.successmessage'));
$json = $modx->getOption('json', $scriptProperties);
$groupPrices = $modx->getOption('groupPrices', $scriptProperties);
$quantityPrices = $modx->getOption('quantityPrices', $scriptProperties);
$preHooks = $modx->getOption('preHooks', $scriptProperties);
$language = $modx->getOption('language', $scriptProperties);
$submit_var = $modx->getOption('submitVar', $scriptProperties);

// check if submit var is set and not submitted
if (!empty($submit_var) and !isset($_REQUEST[$submit_var])) return;


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

// format groupPrices
if (!empty($groupPrices)) {
    $groupPricesArray = explode('||', $groupPrices);
    $groupPrices = array();

    foreach ($groupPricesArray as $item) {
        $array = explode('==', $item);
        $groupPrices[$array[0]] = $array[1];
    }
}

// format quantityPrices
if (!empty($quantityPrices)) {
    $quantityPricesArray = explode('||', $quantityPrices);
    $quantityPrices = array();

    foreach ($quantityPricesArray as $item) {
        $array = explode('==', $item);
        $quantityPrices[$array[0]] = $array[1];
    }
}

// init easycart Object
$ec = new easyCart($modx);

$item = $ec->createItem(array(
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
    'group_prices' => json_encode($groupPrices),
    'quantity_prices' => json_encode($quantityPrices),
));


// run preHooks
if (!empty($preHooks)) {
    if (!$ec->runPreHooks($preHooks)) {
        return;
    }
}

// add product to cart
$order = $ec->apiRequest('orderitem', "POST", $ec->getItem());

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

// add optional language to url
if (!empty($language)) {
    $url .= '?language=' . $language;
}

// Set Message to placeholder
$modx->toPlaceholders(array(
    'message' => $successMessage,
    'order' => $order->id,
    'url' => $url,
),'easycart');

// redirect to Cart
if ($redirect != false) {
    $modx->sendRedirect($url);
}

// return as JSON
if (!empty($json)) {
    return json_encode(array(
        'order' => $order->id,
        'url' => $url,
        'message' => $successMessage,
    ));
}

return;