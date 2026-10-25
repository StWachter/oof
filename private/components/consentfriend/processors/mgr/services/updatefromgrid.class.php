<?php
/**
 * Update Service From Grid
 *
 * @package consentfriend
 * @subpackage processors
 */

require_once(dirname(__FILE__) . '/update.class.php');

/**
 * Class ConsentFriendServicesUpdateFromGridProcessor
 */
class ConsentFriendServicesUpdateFromGridProcessor extends ConsentFriendServicesUpdateProcessor
{
    /**
     * {@inheritDoc}
     * @return bool|string
     */
    public function initialize()
    {
        $data = $this->getProperty('data');
        if (empty($data)) {
            return $this->modx->lexicon('consentfriend.service_err_invalid_data');
        }
        $data = json_decode($data, true);
        if (empty($data)) {
            return $this->modx->lexicon('consentfriend.service_err_invalid_data');
        }
        $data['purpose_ids'] = str_replace('|', ',', $data['purposes']);
        if ($this->consentfriend->getOption('useContexts')) {
            $data['context_keys'] = str_replace('|', ',', $data['contexts']);
        }
        if ($this->consentfriend->getOption('useGeoIP')) {
            $data['country_isos'] = str_replace('|', ',', $data['countries']);
        }
        $this->setProperties($data);
        $this->unsetProperty('data');

        return parent::initialize();
    }
}

return 'ConsentFriendServicesUpdateFromGridProcessor';
