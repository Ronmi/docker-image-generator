<?php

namespace PHPBrew\DIG\Variants;

class Debug extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return null;
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+debug');
    }
}
