<?php

namespace PHPBrew\DIG\Variants;

class Imap extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('imap_utf8');
    }

    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        return array('libc-client-dev', 'libkrb5-dev', 'libssl-dev');
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
        return array('+imap', '--with-imap', '--with-kerberos', '--with-libdir=lib');
    }
}
