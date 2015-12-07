<?php

namespace PHPBrew\DIG\Variants;

class Filter extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('filter_list');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+filter');
    }
}
