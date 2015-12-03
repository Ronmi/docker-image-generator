<?php

namespace PHPBrew\DIG\Variants;

class Phpdbg extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+phpdbg');
    }
}
