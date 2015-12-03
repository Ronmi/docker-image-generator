<?php

namespace PHPBrew\DIG\Variants;

class Json extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+json');
    }
}
