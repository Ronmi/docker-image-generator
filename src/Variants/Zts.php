<?php

namespace PHPBrew\DIG\Variants;

class Zts extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+zts');
    }
}
