<?php

namespace Phpbrew\DIG\Variants;

class Bcmath extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+bcmath');
    }
}
