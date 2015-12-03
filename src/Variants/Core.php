<?php

namespace Phpbrew\DIG\Variants;

class Core extends \Phpbrew\DIG\Variant
{
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
