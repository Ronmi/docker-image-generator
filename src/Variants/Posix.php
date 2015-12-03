<?php

namespace PHPBrew\DIG\Variants;

class Posix extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+posix');
    }
}
