<?php

namespace PHPBrew\DIG;

abstract class VirtualVariant extends Variant
{
    /**
     * @return array
     */
    abstract protected function deps();

    private $vars = null;

    /**
     * @return array
     */
    private function getVariants()
    {
        if (!is_array($this->vars)) {
            $vars = $this->deps();
            $vars = array_map(function ($val) {
                $val = strtolower($val);
                switch ($val) {
                    case 'static':
                        $val = 'vstatic';
                        break;
                    case 'default':
                        $val = 'vdefault';
                        break;
                }
                return "PHPBrew\\DIG\\Variants\\" . ucfirst($val);
            }, $vars);
            $vars = array_filter($vars, function ($val) {
                return class_exists($val);
            });
            $this->vars = array_map(function ($val) {
                return new $val;
            }, $vars);
        }

        return $this->vars;
    }

    private function aggregate($method, $phpVer, $debianVer)
    {
        $ret = array();
        foreach ($this->getVariants() as $obj) {
            $ret = array_merge($ret, $obj->$method($phpVer, $debianVer));
        }
        return $ret;
    }

    public function test()
    {
        foreach ($this->getVariants() as $obj) {
            $res = $obj->test();
            if ($res != null) {
                $ref = new ReflectionClass($obj);
                return 'While testing ' . $ref->getName() . ': ' . $res;
            }
        }
        return null;
    }

    /**
     * @return array
     */
    public function pkgs($phpVer, $debianVer)
    {
        return $this->aggregate('pkgs', $phpVer, $debianVer);
    }

    /**
     * @return array
     */
    public function init($phpVer, $debianVer)
    {
        return $this->aggregate('init', $phpVer, $debianVer);
    }

    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return $this->aggregate('args', $phpVer, $debianVer);
    }
}
