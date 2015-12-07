<?php

namespace PHPBrew\DIG\Variants;

class Ftp extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('ftp_connect');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+ftp');
    }
}
