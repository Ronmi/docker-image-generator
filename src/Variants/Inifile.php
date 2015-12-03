<?php

namespace Phpbrew\DIG\Variants;

class Inline extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+inline');
    }
}
