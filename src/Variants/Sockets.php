<?php

namespace PHPBrew\DIG\Variants;

class Sockets extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('socket_create');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+sockets');
    }
}
