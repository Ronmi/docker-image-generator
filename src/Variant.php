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

    /**
     * Fix Debian multiarch issue by linking lib files to /usr/lib/CPU_OS_TYPE_TUPLE
     *
     * @return array
     */
    protected function fixDebianMultiarch($src, $dest = '')
    {
        $dest = '/usr/lib/$(dpkg-architecture -q DEB_HOST_GNU_TYPE)/' . $dest;
        if (substr($dest, strlen($dest) - 1, 1) != '/') {
            $dest .= '/';
        }

        return array(
            array(
                'shell',
                array('mkdir -p ' . escapeshellarg($dest)),
            ),
            array(
                'symlink',
                array(
                    $src,
                    $dest,
                ),
            ),
        );
    }
}
