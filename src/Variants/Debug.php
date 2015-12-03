<?php

namespace Phpbrew\DIG\Variants;

class Debug extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+debug');
    }
}
