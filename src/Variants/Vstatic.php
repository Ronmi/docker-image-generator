<?php

namespace Phpbrew\DIG\Variants;

class Vstatic extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+static');
    }
}
