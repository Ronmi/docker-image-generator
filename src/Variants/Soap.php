<?php

namespace Phpbrew\DIG\Variants;

class Soap extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+soap');
    }
}
