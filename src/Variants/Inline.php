<?php

namespace PHPBrew\DIG\Variants;

class Inline extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+inline');
    }
}
