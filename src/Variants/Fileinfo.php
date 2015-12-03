<?php

namespace Phpbrew\DIG\Variants;

class Fileinfo extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+fileinfo');
    }
}
