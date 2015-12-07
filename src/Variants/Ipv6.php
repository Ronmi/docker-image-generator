<?php

namespace PHPBrew\DIG\Variants;

class Ipv6 extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+ipv6');
    }
}
