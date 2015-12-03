<?php

namespace PHPBrew\DIG\Variants;

class Curl extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+curl');
    }
}
