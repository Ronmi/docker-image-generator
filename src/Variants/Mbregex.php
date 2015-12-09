<?php

namespace PHPBrew\DIG\Variants;

class Mbregex extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('mb_ereg');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+mbregex', '+mbstring');
    }
}
