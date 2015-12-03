<?php

namespace Phpbrew\DIG\Variants;

class Pcntl extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+pcntl');
    }
}
