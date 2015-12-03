<?php

namespace Phpbrew\DIG\Variants;

class Zip extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        switch ($debianVer) {
            case 'jessie':
                $ret = array('zip1g-dev');
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
