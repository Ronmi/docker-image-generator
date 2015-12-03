<?php

namespace PHPBrew\DIG\Variants;

class Ctype extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+ctype');
    }
}
