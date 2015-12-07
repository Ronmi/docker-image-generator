<?php

namespace PHPBrew\DIG\Variants;

class Mbstring extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('mb_strlen');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+mbstring');
    }
}
