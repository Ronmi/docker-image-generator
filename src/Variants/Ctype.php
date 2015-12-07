<?php

namespace PHPBrew\DIG\Variants;

class Ctype extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('ctype_digit');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+ctype');
    }
}
