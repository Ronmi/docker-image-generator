<?php

namespace PHPBrew\DIG\Variants;

class Xmlrpc extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return $this->testF('xmlrpc_encode');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+xmlrpc');
    }
}
