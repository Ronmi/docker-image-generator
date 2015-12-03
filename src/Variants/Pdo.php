<?php

namespace PHPBrew\DIG\Variants;

class Pdo extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+pdo');
    }
}
