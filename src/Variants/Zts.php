<?php

namespace Phpbrew\DIG\Variants;

class Zts extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+zts');
    }
}
