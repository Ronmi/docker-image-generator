<?php

namespace PHPBrew\DIG\Variants;

class Soap extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testC('SoapServer');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+soap');
    }
}
