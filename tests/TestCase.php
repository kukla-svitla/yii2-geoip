<?php

namespace GeoIPUnit;

use svitla\GeoIP\GeoIP;
use PHPUnit_Framework_TestCase;

class TestCase extends PHPUnit_Framework_TestCase
{
    protected function result($ip = null)
    {
        $geoIp = new GeoIP();
        return $geoIp->ip($ip);
    }
}
