<?php

namespace PHPBrew\DIG;

abstract class Variant
{
    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        return array();
    }

    /**
     * This must return array('variant name' => array('method of Dockerfile', 'arg'))
     * @return array(string => array(string,array()))
     */
    public function init($phpVer, $debianVer)
    {
        return array();
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array();
    }
}
