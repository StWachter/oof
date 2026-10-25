<?php
/**
 * Get List Countries
 *
 * @package consentfriend
 * @subpackage processors
 */

use TreehillStudio\ConsentFriend\Processors\Processor;

/**
 * Class ConsentfriendCountryGetListProcessor
 */
class ConsentfriendCountryGetListProcessor extends Processor
{
    public function checkPermissions()
    {
        return $this->modx->hasPermission('countries');
    }

    public function process()
    {
        $countryList = $this->getCountryList();

        $countries = [];
        foreach ($countryList as $iso => $country) {
            $countries[] = [
                'iso' => strtoupper($iso),
                'country' => $country
            ];
        }

        return $this->outputArray($countries);
    }

    public function getCountryList()
    {
        $_country_lang = [];
        include $this->modx->getOption('core_path') . 'lexicon/country/en.inc.php';
        if ($this->consentfriend->getOption('modxversion') == 2) {
            if ($this->modx->getOption('manager_language') != 'en' && file_exists($this->modx->getOption('core_path') . 'lexicon/country/' . $this->modx->getOption('manager_language') . '.inc.php')) {
                include $this->modx->getOption('core_path') . 'lexicon/country/' . $this->modx->getOption('manager_language') . '.inc.php';
            }
        } else {
            $ml = $this->modx->getOption('manager_language', $_SESSION, $this->modx->getOption('cultureKey', null, 'en'));
            if ($ml !== 'en' && file_exists($this->modx->getOption('core_path') . 'lexicon/country/' . $ml . '.inc.php')) {
                include $this->modx->getOption('core_path') . 'lexicon/country/' . $ml . '.inc.php';
            }
        }
        asort($_country_lang);
        $search = $this->getProperty('query', '');
        if (!empty($search)) {
            if ($this->getProperty('valuesqry') !== 'true') {
                foreach ($_country_lang as $key => $value) {
                    if (false === stripos($value, $search)) {
                        unset($_country_lang[$key]);
                    }
                }
                return $_country_lang;
            } else {
                $search = explode('|', $search);
                foreach ($_country_lang as $key => $value) {
                    if (!in_array(strtoupper($key), $search)) {
                        unset($_country_lang[$key]);
                    }
                }
                return $_country_lang;
            }
        }
        $iso = $this->getProperty('iso', '');
        if (!empty($iso)) {
            foreach ($_country_lang as $key => $value) {
                if ($key !== strtolower($iso)) {
                    unset($_country_lang[$key]);
                }
            }
            return $_country_lang;
        }
        if ($this->getProperty('combo')) {
            array_unshift($_country_lang, ['']);
        }

        return $_country_lang;
    }
}

return 'ConsentfriendCountryGetListProcessor';
