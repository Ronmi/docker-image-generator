<?php

namespace Phpbrew\DIG\Variants;

class Mbregex extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+mbregex');
    }
}
