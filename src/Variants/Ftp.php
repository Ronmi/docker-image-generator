<?php

namespace Phpbrew\DIG\Variants;

class Ftp extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+ftp');
    }
}
