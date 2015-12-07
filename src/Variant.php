<?php

namespace PHPBrew\DIG;

abstract class Variant
{
    /**
     * Test if this variant is successfully built.
     *
     * returns a string indicates what goes wrong, or null if success.
     */
    abstract public function test();

    protected function testF($func, $msg = '')
    {
        return $this->testFs(array($func => $msg));
    }

    protected function testFs(array $func)
    {
        foreach ($func as $f => $msg) {
            if (!function_exists($f)) {
                if ($msg == '') {
                    $msg = "Function $f does not exists.";
                }
                return $msg;
            }
        }
        return null;
    }

    protected function testC($cls, $msg = '')
    {
        return $this->testCs(array($cls => $msg));
    }

    protected function testCs(array $cls)
    {
        foreach ($cls as $c => $msg) {
            if (!class_exists($c)) {
                if ($msg == '') {
                    $msg = "Class $c does not exists.";
                }
                return $msg;
            }
        }
        return null;
    }

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
