<?php

namespace PHPBrew\DIG\Variants;

class Session extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+session');
    }
}
