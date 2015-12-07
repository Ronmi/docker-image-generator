<?php

namespace PHPBrew\DIG\Variants;

class Opcache extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('opcache_reset');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+opcache');
    }
}
