<?php

namespace PHPBrew\DIG\Variants;

class Calendar extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('unixtojd');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+calendar');
    }
}
