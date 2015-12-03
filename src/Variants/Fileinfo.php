<?php

namespace PHPBrew\DIG\Variants;

class Fileinfo extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+fileinfo');
    }
}
