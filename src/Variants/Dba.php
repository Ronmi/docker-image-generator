<?php

namespace PHPBrew\DIG\Variants;

class Dba extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+dba');
    }
}
