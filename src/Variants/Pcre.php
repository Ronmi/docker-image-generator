<?php

namespace Phpbrew\DIG\Variants;

class Pcre extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+pcre');
    }
}
