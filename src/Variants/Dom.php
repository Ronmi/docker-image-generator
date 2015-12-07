<?php

namespace PHPBrew\DIG\Variants;

class Dom extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testC('DOMDocument');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+dom');
    }
}
