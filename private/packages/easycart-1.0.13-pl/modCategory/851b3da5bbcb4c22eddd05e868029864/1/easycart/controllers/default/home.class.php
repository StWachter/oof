<?php
class easycartHomeManagerController extends modExtraManagerController {
    public function process(array $scriptProperties = array()) {}

    public function initialize()
    {
        $corePath = $this->modx->getOption('easycart.core_path', null, $this->modx->getOption('core_path') . 'components/easycart/');
        $this->easycart = $this->modx->getService('easycart', 'easycart', $corePath . '/model/easycart/', array(
            'core_path' => $corePath
        ));
    }

    public function getLanguageTopics()
    {
        return array('core:setting', 'easycart:default');
    }

    public function getPageTitle()
    {
        return $this->modx->lexicon('easycart');
    }

    public function loadCustomCssJs() {

        $assetsUrl = MODX_ASSETS_URL . 'components/easycart/';
        $jsUrl = $assetsUrl . 'manager/js/';
        $cssUrl = $assetsUrl . 'manager/css/';
        $imgUrl = $assetsUrl . 'manager/img/';
        $connectorUrl = $assetsUrl . 'connector.php';

        $this->addCss($cssUrl . 'main.css');

        $this->easycart->options = array(
            'assetsUrl' => $assetsUrl,
            'connectorUrl' => $connectorUrl,
            'namespace' => $this->modx->getOption('easycart.namespace'),
            'locale' => $this->modx->getOption('manager_language'),
        );

        $this->modx->regClientStartupHTMLBlock('<script>
                var easycart = ' . json_encode($this->easycart->options) . '
            </script>');
    }

    public function getTemplateFile()
    {
        // view controller

        // orders
        if ($_GET['eca'] == 'orders') {

            $ec = new easyCart($this->modx);
            $orders = $ec->apiRequest('order');

            $this->setPlaceholder('orders', $orders->data);

            return 'orders.tpl';
        }

        // default: home
        $ec = new easyCart($this->modx);
        $orders = $ec->apiRequest('order');

        $this->setPlaceholder('orders', $orders->data);

        return 'home.tpl';

    }
}
