<?php
/**
 * @package consentfriend
 * @subpackage plugin
 */

namespace TreehillStudio\ConsentFriend\Plugins\Events;

use TreehillStudio\ConsentFriend\Plugins\Plugin;

class OnManagerPageInit extends Plugin
{
    public function process()
    {
        $refresh = $this->consentfriend->getOption('mmdbRefresh');

        $cacheManager = $this->modx->getCacheManager();

        $isValid = $cacheManager->get('is_valid', $this->consentfriend->cacheOptions);
        if ($this->consentfriend->getOption('useCron') && !$isValid) {
            $isValid = true;
            $this->consentfriend->geoip->loadData();
            $cacheManager->set('is_valid', $isValid, strtotime('+' . $refresh . ' day', 0), $this->consentfriend->cacheOptions);
        }
    }
}
