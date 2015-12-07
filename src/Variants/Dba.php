<?php

namespace PHPBrew\DIG\Variants;

class Dba extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return $this->testF('dba_open');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+dba');
    }
}
