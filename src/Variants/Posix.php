<?php

namespace PHPBrew\DIG\Variants;

class Posix extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return $this->testF('posix_kill');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+posix');
    }
}
