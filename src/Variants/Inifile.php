<?php

namespace PHPBrew\DIG\Variants;

class Inifile extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+inifile');
    }
}
