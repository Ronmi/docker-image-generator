<?php

namespace PHPBrew\DIG\Variants;

class Cli extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+cli');
    }
}
