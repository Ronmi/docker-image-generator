<?php

namespace PHPBrew\DIG\Variants;

class Bz2 extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        switch ($debianVer) {
            case 'jessie':
                $ret = array('libbz2-dev');
                return $ret;
        }
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+bz2');
    }
}
