<?php

namespace PHPBrew\DIG\Variants;

class Mhash extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+mhash');
    }
}
