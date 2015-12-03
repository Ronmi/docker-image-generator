<?php

namespace PHPBrew\DIG\Variants;

class Xmlrpc extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+xmlrpc');
    }
}
