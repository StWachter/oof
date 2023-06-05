id: 82
source: 2
name: setVariation
properties: 'a:0:{}'

-----

$variations = json_decode($modx->resource->getTVValue('productVariants'));

// stop here if no variations exist
if (count($variations) <= 0) return true;


foreach ($variations as $var) {
    if ($var->MIGX_id == $_POST['variant']) {
        $hook->setValue('sku', $modx->resource->id . ' - ' . $var->MIGX_id);
        $hook->setValue('price', (int)(str_replace(',', '.', $var->variantPrice) * 100));
        
        // set data for easycart
        $properties = json_decode($hook->getValue('properties'), true);
        $properties['attributes'][] = array(
            'title' => 'Option',
            'value' => $var->variant,
        );
        $hook->setValue('properties', json_encode($properties));
    }
}

return true;