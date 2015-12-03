<?php

namespace Phpbrew\DIG\Variants;

class Fpm extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+fpm');
    }
}
