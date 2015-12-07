<?php

namespace PHPBrew\DIG;

use Fruit\DockerKit\Installer;
use Fruit\DockerKit\Dockerfile;

class PHPBrewInstaller extends VirtualVariant implements Installer
{
    private $vars;
    private $phpVer;
    private $debianVar;
    private $user;

    public function __construct($phpVer, $debianVer, $user)
    {
        $this->phpVer = $phpVer;
        $this->debianVer = $debianVer;
        $this->user = $user;
        $this->vars = array('core');
    }

    /**
     * @return PHPBrewInstaller
     */
    public function variant($var)
    {
        $this->vars[] = $var;
        return $this;
    }

    /**
     * @return PHPBrewInstaller
     */
    public function variants(array $vars)
    {
        $this->vars = array_merge($this->vars, $vars);
        return $this;
    }

    protected function deps()
    {
        return $this->vars;
    }

    public function installTo(Dockerfile $file)
    {
        $file->gStart(true);

        // install packages
        $pkgs = array('build-essential', 'php5-cli', 'php-pear', 'curl', 'wget', 'pkg-config');
        $pkgs = array_merge($pkgs, $this->pkgs($this->phpVer, $this->debianVer));
        $file->install($pkgs);

        // init env
        foreach ($this->init($this->phpVer, $this->debianVar) as $acts) {
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

        $args = array_unique($this->args($this->phpVer, $this->debianVar));

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
            ->gEnd()
            ->uEnd();
    }
}
