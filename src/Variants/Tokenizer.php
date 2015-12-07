<?php

namespace PHPBrew\DIG\Variants;

class Tokenizer extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return $this->testF('token_get_all');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+tokenizer');
    }
}
