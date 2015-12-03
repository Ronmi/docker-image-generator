<?php

namespace PHPBrew\DIG\Variants;

class Exif extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+exif');
    }
}
