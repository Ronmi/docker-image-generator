<?php

namespace Phpbrew\DIG\Variants;

class Cli extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+cli');
    }
}
