<?php

namespace PHPBrew\DIG;

abstract class TestableVariant extends Variant
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
}
