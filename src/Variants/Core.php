<?php

namespace PHPBrew\DIG\Variants;

class Core extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        return null;
    }

    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        switch ($debianVer) {
            case 'jessie':
                $ret = array('libxml2-dev', 'libxslt1-dev');
                if ($phpVer < '5.4') {
                    $ret[] = 'libicu-dev';
                }
                return $ret;
        }
    }
}
