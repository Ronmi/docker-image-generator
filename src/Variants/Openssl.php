<?php

namespace PHPBrew\DIG\Variants;

class Openssl extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('openssl_encrypt');
    }

    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        switch ($debianVer) {
            case 'jessie':
                $ret = array('libssl-dev');
                return $ret;
        }
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+openssl');
    }
}
