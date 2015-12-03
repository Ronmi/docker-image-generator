<?php

namespace Phpbrew\DIG\Variants;

class Xml extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+xml');
    }
}
