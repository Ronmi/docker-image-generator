<?php

namespace PHPBrew\DIG;

use Fruit\DockerKit\Installer;
use Fruit\DockerKit\Dockerfile;

class PHPBrewInstaller implements Installer
{
    private $vars;
    private $phpVer;
    private $debianVer;
    private $user;

    public function __construct($phpVer, $debianVer, $user)
    {
        $this->phpVer = $phpVer;
        $this->debianVer = $debianVer;
        $this->user = $user;
        $this->vars = array('core' => new \PHPBrew\DIG\Variants\Core);
    }

    /**
     * @return PHPBrewInstaller
     */
    public function variant($var)
    {
        $var = strtolower($var);
        switch ($var) {
            case 'static':
                $var = 'vstatic';
                break;
            case 'default':
                $var = 'vdefault';
                break;
        }
        if (isset($this->vars[$var])) {
            return $this;
        }

        $cls = "PHPBrew\\DIG\\Variants\\" . ucfirst($var);
        if (!class_exists($cls)) {
            return $this;
        }
        $obj = new $cls;
        $this->vars[$var] = $obj;
        return $this->variants($obj->deps($this->phpVer, $this->debianVer));
    }

    /**
     * @return PHPBrewInstaller
     */
    public function variants(array $vars)
    {
        foreach ($vars as $v) {
            $this->variant($v);
        }
        return $this;
    }

    public function installTo(Dockerfile $file)
    {
        $file->gStart(true);

        // install packages
        $pkgs = array('build-essential', 'php5-cli', 'php-pear', 'curl', 'wget', 'pkg-config');
        $pkgs = array_merge($pkgs, $this->pkgs($this->phpVer, $this->debianVer));
        $file->install($pkgs);

        // init env
        foreach ($this->init($this->phpVer, $this->debianVer) as $acts) {
            list($method, $arg) = $acts;
            call_user_func_array(array($file, $method), $arg);
        }

        $file
            ->wget(
                'https://s3-ap-northeast-1.amazonaws.com/phpbrew/travis-build/phpbrew',
                '/usr/local/bin/phpbrew'
            )
            ->chmod('a+x', '/usr/local/bin/phpbrew')
            ->uStart($this->user)
            ->shell('phpbrew init')
            ->appendToFile('source ~/.phpbrew/bashrc', '~/.bashrc')
            ->gReset();

        $args = array_unique($this->args());

        $variants = array();
        $extra = array();

        foreach ($args as $arg) {
            if (substr($arg, 0, 1) == '+') {
                $variants[] = $arg;
            } else {
                $extra[] = $arg;
            }
        }

        $opts = implode(' ', $variants);
        if (count($extra) > 0) {
            if ($opts != '') {
                $opts .= ' ';
            }
            $opts .= '-- ' . implode(' ', $extra);
        }
        $cmd = sprintf('phpbrew install %s %s', $this->phpVer, $opts);
        $file
            ->shell('phpbrew update')
            ->shell($cmd)
            ->gReset()
            ->shell('source ~/.phpbrew/bashrc')
            ->shell('phpbrew switch $(phpbrew list|grep -vF system|head -n 1)')
            ->shell('BINDIR=$(phpbrew path bin)')
            ->shell('EXTDIR=$(phpbrew path ext)')
            ->shell('ETCDIR=$(phpbrew path etc)');
        foreach ($this->post() as $entry) {
            list($method, $args) = $entry;
            call_user_func_array(array($file, $method), $args);
        }
        $file
            ->gEnd()
            ->uEnd();
    }

    private function aggregate($method)
    {
        $ret = array();
        foreach ($this->vars as $var => $obj) {
            $ret = array_merge($ret, $obj->$method($this->phpVer, $this->debianVer));
        }
        return $ret;
    }

    /**
     * @return array
     */
    private function pkgs()
    {
        return $this->aggregate('pkgs');
    }

    /**
     * @return array
     */
    private function init()
    {
        return $this->aggregate('init');
    }

    /**
     * @return array
     */
    private function args()
    {
        return $this->aggregate('args');
    }

    /**
     * @return array
     */
    private function post()
    {
        return $this->aggregate('post');
    }
}
