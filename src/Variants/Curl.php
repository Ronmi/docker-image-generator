<?php

namespace Phpbrew\DIG\Variants;

class Curl extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+curl');
    }
}
