<?php

namespace PHPBrew\DIG\Variants;

class Bcmath extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return $this->testF('bcadd');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+bcmath');
    }
}
