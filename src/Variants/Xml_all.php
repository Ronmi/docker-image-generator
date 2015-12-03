<?php

namespace PHPBrew\DIG\Variants;

class Xml_all extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+xml_all');
    }
}
