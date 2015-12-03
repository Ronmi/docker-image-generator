<?php

namespace Phpbrew\DIG\Variants;

class Ctype extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+ctype');
    }
}
