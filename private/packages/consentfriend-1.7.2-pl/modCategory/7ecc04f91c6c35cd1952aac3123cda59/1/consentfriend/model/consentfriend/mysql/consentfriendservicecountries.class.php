<?php
/**
 * @package consentfriend
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/consentfriendservicecountries.class.php');
class ConsentfriendServiceCountries_mysql extends ConsentfriendServiceCountries {}
?>