<?php

namespace PHPBrew\DIG\Variants;

class Curl extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return $this->testF('curl_init');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+curl');
    }
}
