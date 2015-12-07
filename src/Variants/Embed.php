<?php

namespace PHPBrew\DIG\Variants;

class Embed extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+embed');
    }
}
