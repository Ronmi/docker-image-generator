<?php

namespace PHPBrew\DIG\Variants;

class Fileinfo extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('finfo_open');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+fileinfo');
    }
}
