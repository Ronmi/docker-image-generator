<?php

namespace PHPBrew\DIG\Variants;

class Mhash extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return $this->testF('mhash');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+mhash');
    }
}
