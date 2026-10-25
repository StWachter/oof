<?php
/**
 * GeoIP classfile
 *
 * @package consentfriend
 * @subpackage classfile
 */

namespace TreehillStudio\ConsentFriend\Helper;

use ConsentFriend;
use danielsreichenbach\GeoIP2Update\Client;
use Exception;
use GeoIp2\Database\Reader;
use GeoIp2\Exception\AddressNotFoundException;
use modX;
use xPDO;

/**
 * Class GeoIP
 */
class GeoIP
{
    /**
     * A reference to the modX instance
     * @var modX $modx
     */
    public $modx;

    /**
     * A reference to the ConsentFriend instance
     * @var ConsentFriend $consentfriend
     */
    public $consentfriend;

    /**
     * @var
     */
    private $record;


    /**
     * Geocode constructor
     *
     * @param modX $modx A reference to the modX instance.
     */
    public function __construct(modX &$modx, $consentfriend)
    {
        $this->modx =& $modx;
        $this->consentfriend =& $consentfriend;

        if (!is_dir($this->consentfriend->getOption('databasePath'))) {
            $cacheManager = $modx->getCacheManager();
            if (!$cacheManager->writeTree($this->consentfriend->getOption('databasePath'))) {
                $modx->log(xPDO::LOG_LEVEL_ERROR, 'The GeoIP2/GeoLite2 database folder could not be created');
            } else {
                $this->loadData();
            }
        } else {
            $files = scandir($this->consentfriend->getOption('databasePath'));
            if (count($files) == 0 || count($files) == 2) {
                $this->loadData();
            }
        }
    }

    /**
     */
    public function loadData()
    {
        $client = new Client(array(
            'account_id' => $this->consentfriend->getOption('mmdbAccountId'),
            'license_key' => $this->consentfriend->getOption('mmdbLicenseKey'),
            'dir' => $this->consentfriend->getOption('databasePath'),
            'editions' => $this->consentfriend->getOption('mmdbDatabase'),
        ));
        try {
            $client->run();
        } catch (Exception $e) {
            $this->modx->log(xPDO::LOG_LEVEL_ERROR, 'Error: ' . $e->getMessage(), '', 'ConsentFriend');
        }
    }

    /**
     * Get the record from an IP address
     *
     * @param string $ip
     * @return string
     */
    public function getRecord($ip)
    {
        //$ip = '94.31.86.31';
        $database = $this->consentfriend->getOption('mmdb_database');
        $result = '';
        try {
            $reader = new Reader($this->consentfriend->getOption('databasePath') . $database . '/' . $database . '.mmdb');
            $this->record = $reader->country($ip);
        } catch (AddressNotFoundException $e) {
            if ($this->consentfriend->getOption('debug')) {
                $this->modx->log(xPDO::LOG_LEVEL_ERROR, $e->getMessage(), '', 'GeoIP2');
            }
        } catch (Exception $e) {
            $this->modx->log(xPDO::LOG_LEVEL_ERROR, $e->getMessage(), '', 'GeoIP2');
            if ($this->consentfriend->getOption('debug')) {
                $result = $e->getMessage();
            }
        }
        return $result;
    }

    /**
     * Get the country iso from an IP address
     *
     * @param string $ip
     * @return string
     */
    public function getCountryIso($ip)
    {
        if (isset($_SESSION['geoip2.iso_code']) && false) {
            return $_SESSION['geoip2.iso_code'];
        } else {
            $result = $this->getRecord($ip);
            if ($this->record) {
                try {
                    $result = $this->record->country->isoCode;
                    $_SESSION['geoip2.iso_code'] = null;
                } catch (Exception $e) {
                    $this->modx->log(xPDO::LOG_LEVEL_ERROR, $e->getMessage(), '', 'GeoIP2');
                    if ($this->consentfriend->getOption('debug')) {
                        $result = $e->getMessage();
                    }
                }
            }
            return $result;
        }
    }

    /**
     * Get the continent from an IP address
     *
     * @param string $ip
     * @return string
     */
    public function getContinent($ip)
    {
        if (isset($_SESSION['geoip2.continent_code'])) {
            return $_SESSION['geoip2.continent_code'];
        } else {
            $result = $this->getRecord($ip);
            if ($this->record) {
                try {
                    $result = $this->record->continent->code;
                    $_SESSION['geoip2.continent_code'] = $result;
                } catch (Exception $e) {
                    $this->modx->log(xPDO::LOG_LEVEL_ERROR, $e->getMessage(), '', 'GeoIP2');
                    if ($this->consentfriend->getOption('debug')) {
                        $result = $e->getMessage();
                    }
                }
            }
            return $result;
        }
    }

    /**
     * Get the continent country iso from an IP address
     *
     * @param string $ip
     * @return string
     */
    public function getContinentCountryIso($ip)
    {
        if (isset($_SESSION['geoip2.continent_country_code'])) {
            return $_SESSION['geoip2.continent_country_code'];
        } else {
            $result = $this->getRecord($ip);
            if ($this->record) {
                try {
                    $result = $this->record->continent->code . '-' . $this->record->country->isoCode;
                    $_SESSION['geoip2.continent_country_code'] = $result;
                } catch (Exception $e) {
                    $this->modx->log(xPDO::LOG_LEVEL_ERROR, $e->getMessage(), '', 'GeoIP2');
                    if ($this->consentfriend->getOption('debug')) {
                        $result = $e->getMessage();
                    }
                }
            }
            return $result;
        }
    }

    /**
     * Get the city from an IP address
     *
     * @param string $ip
     * @return string
     */
    public function getCity($ip)
    {
        if (isset($_SESSION['geoip2.city_id'])) {
            return $_SESSION['geoip2.city_id'];
        } else {
            $result = $this->getRecord($ip);
            if ($this->record) {
                try {
                    $result = $this->record->city->geonameId;
                    $_SESSION['geoip2.city_id'] = $result;
                } catch (Exception $e) {
                    $this->modx->log(xPDO::LOG_LEVEL_ERROR, $e->getMessage(), '', 'GeoIP2');
                    if ($this->consentfriend->getOption('debug')) {
                        $result = $e->getMessage();
                    }
                }
            }
            return $result;
        }
    }
}
