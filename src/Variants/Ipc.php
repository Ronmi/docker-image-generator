<?php

namespace Phpbrew\DIG\Variants;

class Ipc extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+ipc');
    }
}
