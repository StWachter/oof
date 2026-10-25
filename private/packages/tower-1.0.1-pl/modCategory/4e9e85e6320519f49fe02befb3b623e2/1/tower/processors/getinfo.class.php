<?php
/**
 * GetInfoProcessor
 *
 * @package tower
 * @subpackage processor
 */

class GetInfoProcessor extends modProcessor
{
    public function process()
    {
        header('Content-Type: application/json; charset=utf-8');

        $response_array = array();
        $errors = array();

        // initialize tower class
        $corePath = $this->modx->getOption('tower.core_path', null, $this->modx->getOption('core_path') . 'components/tower/');
        $tower = $this->modx->getService('tower', 'Tower', $corePath . 'model/tower/', array('core_path' => $corePath));

        // check security
        if (true !== $message = $tower->checkSecurity()) return $message;

        // get data
        $data = $tower->getData();

        if (count($errors) <= 0) {
            // set success to response array
            $response_array['success'] = true;
            $response_array['data'] = $data;
        }else {
            // set success to response array
            $response_array['success'] = false;
            $response_array['errors'] = $errors;
        }


        return json_encode($response_array);
    }
}

return 'GetInfoProcessor';
