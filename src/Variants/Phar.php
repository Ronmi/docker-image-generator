<?php

namespace Phpbrew\DIG\Variants;

class Phar extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+phar');
    }
}
