<?php

namespace PHPBrew\DIG\Variants;

class Inline extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return null;
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+inline');
    }
}
