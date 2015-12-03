<?php

namespace PHPBrew\DIG\Variants;

class Filter extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+filter');
    }
}
