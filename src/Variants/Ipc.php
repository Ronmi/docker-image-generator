<?php

namespace PHPBrew\DIG\Variants;

class Ipc extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+ipc');
    }
}
