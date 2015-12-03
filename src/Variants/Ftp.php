<?php

namespace PHPBrew\DIG\Variants;

class Ftp extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+ftp');
    }
}
