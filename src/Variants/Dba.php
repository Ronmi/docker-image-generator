<?php

namespace Phpbrew\DIG\Variants;

class Dba extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+dba');
    }
}
