<?php

namespace Phpbrew\DIG\Variants;

class Calendar extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+calendar');
    }
}
