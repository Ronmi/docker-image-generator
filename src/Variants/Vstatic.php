<?php

namespace PHPBrew\DIG\Variants;

class Vstatic extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+static');
    }
}
