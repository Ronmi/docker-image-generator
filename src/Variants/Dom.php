<?php

namespace Phpbrew\DIG\Variants;

class Dom extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+dom');
    }
}
