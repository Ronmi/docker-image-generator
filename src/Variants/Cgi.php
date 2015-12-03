<?php

namespace Phpbrew\DIG\Variants;

class Cgi extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+cgi');
    }
}
