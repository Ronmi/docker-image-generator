<?php

namespace PHPBrew\DIG\Variants;

class Gcov extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return null;
    }

    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        switch ($debianVer) {
            case 'jessie':
                $ret = array('lcov');
                return $ret;
        }
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+gcov');
    }
}
