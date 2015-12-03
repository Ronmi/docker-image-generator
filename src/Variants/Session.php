<?php

namespace Phpbrew\DIG\Variants;

class Session extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+session');
    }
}
