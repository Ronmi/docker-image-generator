<?php

namespace PHPBrew\DIG\Variants;

class Pcntl extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+pcntl');
    }
}
