<?php

namespace PHPBrew\DIG\Variants;

class Pcre extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+pcre');
    }
}
