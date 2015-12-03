<?php

namespace Phpbrew\DIG\Variants;

class Ipv6 extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+ipv6');
    }
}
