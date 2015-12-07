<?php

namespace PHPBrew\DIG\Variants;

class Json extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return $this->testF('json_encode');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+json');
    }
}
