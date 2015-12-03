<?php

namespace PHPBrew\DIG\Variants;

class Bcmath extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+bcmath');
    }
}
