<?php

namespace PHPBrew\DIG\Variants;

class Dom extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+dom');
    }
}
