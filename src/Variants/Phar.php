<?php

namespace PHPBrew\DIG\Variants;

class Phar extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+phar');
    }
}
