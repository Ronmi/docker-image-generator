<?php

namespace PHPBrew\DIG\Variants;

class Pdo extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return $this->testC('PDO');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+pdo');
    }
}
