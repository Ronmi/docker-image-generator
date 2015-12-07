<?php

namespace PHPBrew\DIG\Variants;

class Cgi extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return null;
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+cgi');
    }
}
