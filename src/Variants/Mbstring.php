<?php

namespace Phpbrew\DIG\Variants;

class Mbstring extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+mbstring');
    }
}
