<?php

namespace Phpbrew\DIG\Variants;

class Posix extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+posix');
    }
}
