<?php

namespace PHPBrew\DIG\Variants;

class Mcrypt extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('mcrypt_encrypt');
    }

    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        switch ($debianVer) {
            case 'jessie':
                $ret = array('libmcrypt-dev');
                return $ret;
        }
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+mcrypt');
    }
}
