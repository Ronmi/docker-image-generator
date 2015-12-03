<?php

namespace Phpbrew\DIG\Variants;

class Phpdbg extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+phpdbg');
    }
}
