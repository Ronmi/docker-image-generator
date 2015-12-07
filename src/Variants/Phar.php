<?php

namespace PHPBrew\DIG\Variants;

class Phar extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testC('Phar');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+phar');
    }
}
