<?php

namespace PHPBrew\DIG\Variants;

class Session extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return $this->testF('session_id');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+session');
    }
}
