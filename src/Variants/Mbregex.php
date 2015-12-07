<?php

namespace PHPBrew\DIG\Variants;

class Mbregex extends \PHPBrew\DIG\Variant
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
        return array('+mbregex');
    }
}
