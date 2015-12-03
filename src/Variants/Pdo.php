<?php

namespace Phpbrew\DIG\Variants;

class Pdo extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+pdo');
    }
}
