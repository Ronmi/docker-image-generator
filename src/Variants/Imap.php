<?php

namespace Phpbrew\DIG\Variants;

class Imap extends \Phpbrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+imap');
    }
}
