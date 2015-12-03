<?php

namespace Phpbrew\DIG\Variants;

class Exif extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+exif');
    }
}
