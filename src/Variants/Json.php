<?php

namespace Phpbrew\DIG\Variants;

class Json extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+json');
    }
}
