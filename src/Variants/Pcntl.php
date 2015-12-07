<?php

namespace PHPBrew\DIG\Variants;

class Pcntl extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('pcntl_fork');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+pcntl');
    }
}
