<?php

namespace PHPBrew\DIG\Variants;

class Mbregex extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+mbregex');
    }
}
