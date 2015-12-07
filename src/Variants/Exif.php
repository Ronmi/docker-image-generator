<?php

namespace PHPBrew\DIG\Variants;

class Exif extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('read_exif_data');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+exif');
    }
}
