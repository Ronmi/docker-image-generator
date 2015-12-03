<?php

namespace Phpbrew\DIG\Variants;

class Opcache extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+opcache');
    }
}
