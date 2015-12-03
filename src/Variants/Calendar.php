<?php

namespace PHPBrew\DIG\Variants;

class Calendar extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+calendar');
    }
}
