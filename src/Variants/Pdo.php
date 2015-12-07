<?php

namespace PHPBrew\DIG\Variants;

class Pdo extends \PHPBrew\DIG\TestableVariant
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
