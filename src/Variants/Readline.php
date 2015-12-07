<?php

namespace PHPBrew\DIG\Variants;

class Readline extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return $this->testF('readline_info');
    }

    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        switch ($debianVer) {
            case 'jessie':
                $ret = array('libreadline-dev');
                return $ret;
        }
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+readline');
    }
}
