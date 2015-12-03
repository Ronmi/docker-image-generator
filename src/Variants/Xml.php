<?php

namespace PHPBrew\DIG\Variants;

class Xml extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+xml');
    }
}
