<?php

namespace Phpbrew\DIG\Variants;

class Mhash extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+mhash');
    }
}
