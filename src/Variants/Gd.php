<?php

namespace PHPBrew\DIG\Variants;

class Gd extends \PHPBrew\DIG\TestableVariant
{
    public function test()
    {
        return $this->testF('gd_info');
    }

    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        switch ($debianVer) {
            case 'jessie':
                $ret = array(
                    'libz-dev',
                    'libpng-dev',
                    'libjpeg-dev',
                    'libxpm-dev',
                    'libvpx-dev',
                    'libfreetype6-dev',
                );
                return $ret;
        }
    }

    public function init($phpVer, $debianVer)
    {
        if ($phpVer < '5.5') {
            return array(
                array('symlink', array('/usr/include/freetype2', '/usr/include/freetype2/freetype')),
            );
        }
        return array();
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        $dir = '/usr/lib/' . trim(shell_exec('dpkg-architecture -q DEB_HOST_GNU_TYPE'));
        return array(
            '+gd=shared',
            '--with-vpx-dir=' . $dir,
            '--with-jpeg-dir=' . $dir,
            '--with-xpm-dir=' . $dir,
            '--with-freetype-dir=' . $dir,
        );
    }

    public function post($phpVer, $debianVer)
    {
        return $this->enableExtension('gd');
    }
}
