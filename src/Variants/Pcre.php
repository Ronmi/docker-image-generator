<?php

namespace PHPBrew\DIG\Variants;

class Pcre extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('preg_match');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+pcre');
    }
}
