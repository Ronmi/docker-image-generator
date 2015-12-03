<?php

namespace PHPBrew\DIG\Variants;

class Opcache extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+opcache');
    }
}
