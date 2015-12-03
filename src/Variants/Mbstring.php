<?php

namespace PHPBrew\DIG\Variants;

class Mbstring extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+mbstring');
    }
}
