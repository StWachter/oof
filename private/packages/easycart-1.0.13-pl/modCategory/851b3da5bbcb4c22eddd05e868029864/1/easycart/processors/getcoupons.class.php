<?php
/**
 * Get Coupons
 *
 * @package easycart
 * @subpackage processor
 */

class EasyCartGetCouponsProcessor extends modProcessor
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

        // send api request and get coupons
        $request = $easycart->apiRequest('coupon');

        return json_encode($request->data);
    }
}

return 'EasyCartGetCouponsProcessor';
