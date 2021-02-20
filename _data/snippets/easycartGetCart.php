id: 66
name: easycartGetCart
category: easyCart
properties: 'a:0:{}'

-----

/*
 * easycartGetCart
 *
 * Snippet to get cart items
 *
 * Usage examples:
 * [[easycartGetCart? ...]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

$corePath = $modx->getOption('easycart.core_path', null, $modx->getOption('core_path') . 'components/easycart/');
$easycart = $modx->getService('easycart', 'easycart', $corePath . 'model/easycart/', array(
    'core_path' => $corePath
));

// properties
// ...


if (empty($_SESSION['order'])) {
    $modx->toPlaceholders(array(
        'total_quantity' => 0,
    ),'easycart');

    return;
}

// get items
$ec = new easyCart($modx);
$request = $ec->apiRequest('order/' . $_SESSION['order']);
$order = $request->data;

// if no order exists
if (!$order->id or $order->status >= 3) {
    $modx->toPlaceholders(array(
        'total_quantity' => 0,
    ),'easycart');

    unset($_SESSION['order']);

    return;
}

// set placeholders
$modx->toPlaceholders(array(
    'total_quantity' => $order->total_quantity,
),'easycart');

return;