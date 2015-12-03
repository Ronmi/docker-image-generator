<?php

namespace PHPBrew\DIG\Variants;

class Soap extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+soap');
    }
}
