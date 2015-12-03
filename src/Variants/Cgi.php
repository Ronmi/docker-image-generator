<?php

namespace PHPBrew\DIG\Variants;

class Cgi extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+cgi');
    }
}
