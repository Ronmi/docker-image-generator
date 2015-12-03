<?php

namespace Phpbrew\DIG;

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
                if ($val == 'static') {
                    $val = 'vstatic';
                }
                return "Phpbrew\\DIG\\Variants\\" . ucfirst(strtolower($val));
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
