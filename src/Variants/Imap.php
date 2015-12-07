<?php

namespace PHPBrew\DIG\Variants;

class Imap extends \PHPBrew\DIG\Variant
{
    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        return array('libc-client-dev');
    }

    /**
     * @return array
     */
    public function init($phpVer, $debianVer)
    {
        return $this->fixDebianMultiarch('/usr/lib/libc-client.*');
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+imap', '--with-imap=/usr');
    }
}
