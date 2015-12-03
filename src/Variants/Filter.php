<?php

namespace Phpbrew\DIG\Variants;

class Filter extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+filter');
    }
}
