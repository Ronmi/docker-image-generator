<?php

namespace PHPBrew\DIG\Variants;

class Zip extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return $this->testC('ZipArchive');
    }

    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        switch ($debianVer) {
            case 'jessie':
                $ret = array('zlib1g-dev');
                return $ret;
        }
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+zip');
    }
}
