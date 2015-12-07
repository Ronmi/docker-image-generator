<?php

namespace PHPBrew\DIG\Variants;

class Phar extends \PHPBrew\DIG\Variant
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
