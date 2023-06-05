<?php
/**
 * Add Coupon
 *
 * @package easycart
 * @subpackage processor
 */

class EasyCartEditCouponProcessor extends modProcessor
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

        // VUE sends POST data as JSON - we need to convert it into array
        $_POST = json_decode(file_get_contents('php://input'), true);

        // send api request and get coupons
        $request = $easycart->apiRequest('coupon/' . $_POST["couponid"], 'PUT', array(
            'code' => $_POST['code'],
            'discount' => $_POST['discount'],
            'discount_percentage' => $_POST['discount_percentage'],
            'min_order_total' => $_POST['min_order_total'],
            'max_order_total' => $_POST['max_order_total'],
            'uses' => $_POST['uses'],
            'date_from' => $_POST['date_from'],
            'date_to' => $_POST['date_to'],
        ));

        return json_encode($request);
    }
}

return 'EasyCartEditCouponProcessor';
