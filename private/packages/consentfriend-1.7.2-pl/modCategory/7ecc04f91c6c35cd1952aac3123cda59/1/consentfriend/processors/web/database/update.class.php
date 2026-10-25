<?php
/**
 * GeoIP2 Database Update
 *
 * @package consentfriend
 * @subpackage processors
 */

use TreehillStudio\ConsentFriend\Processors\Processor;

class GeoIP2DatabaseUpdateProcessor extends Processor
{
    public function process()
    {
        if (php_sapi_name() == 'cli' || $this->getProperty('cronjob_id') == $this->consentfriend->getOption('cronjob_id')) {
            if ($this->consentfriend->getOption('useCron') &&
                $this->consentfriend->getOption('cronjobId') == $this->getProperty('cronjob_id') &&
                $this->consentfriend->geoip
            ) {
                $this->consentfriend->geoip->loadData();
            }
        }
    }
}

return 'GeoIP2DatabaseUpdateProcessor';
