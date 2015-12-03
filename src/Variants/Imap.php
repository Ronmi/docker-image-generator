<?php

namespace PHPBrew\DIG\Variants;

class Imap extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+imap');
    }
}
