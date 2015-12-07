<?php

namespace PHPBrew\DIG\Variants;

class Fpm extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+fpm');
    }
}
