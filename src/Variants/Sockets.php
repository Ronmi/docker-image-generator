<?php

namespace PHPBrew\DIG\Variants;

class Sockets extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+sockets');
    }
}
