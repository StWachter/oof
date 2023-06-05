<?php
/**
 * Get Order
 *
 * @package easycart
 * @subpackage processor
 */

class EasyCartGetOrderProcessor extends modProcessor
{
    /**
     * EasyCartGetProcessor constructor.
     * @param modX $modx A reference to the modX instance
     * @param array $properties An array of properties
     */
    public function __construct(modX $modx, array $properties)
    {
        parent::__construct($modx, $properties);

        $corePath = $modx->getOption('easycart.core_path', null, $modx->getOption('core_path') . 'components/easycart/');
        $this->easycart = $modx->getService('easycart', 'EasyCart', $corePath . 'model/easycart/', array(
            'core_path' => $corePath
        ));
    }

    public function process()
    {

        $easycart = new EasyCart($this->modx);

        if (empty($_GET["orderid"])) return;

        // send api request and get orders
        $orders = $easycart->apiRequest('order/' . $_GET["orderid"]);

        return json_encode($orders->data);
    }
}

return 'EasyCartGetOrderProcessor';
