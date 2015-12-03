<?php

namespace Phpbrew\DIG\Variants;

class Embed extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+embed');
    }
}
