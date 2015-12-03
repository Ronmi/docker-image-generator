<?php

namespace Phpbrew\DIG\Variants;

class Xmlrpc extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+xmlrpc');
    }
}
