<?php

namespace PHPBrew\DIG\Variants;

class Tokenizer extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+tokenizer');
    }
}
