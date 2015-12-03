<?php

namespace PHPBrew\DIG\Variants;

class Debug extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+debug');
    }
}
