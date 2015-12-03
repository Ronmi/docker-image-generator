<?php

namespace Phpbrew\DIG;

use Fruit\DockerKit\Installer;
use Fruit\DockerKit\Dockerfile;

class PhpbrewInstaller extends VirtualVariant implements Installer
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
     * @return PhpbrewInstaller
     */
    public function variant($var)
    {
        $this->vars[] = $var;
        return $this;
    }

    /**
     * @return PhpbrewInstaller
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
        $pkgs = array('build-essential', 'php5-cli', 'php-pear', 'curl', 'wget');
        $pkgs = array_merge($pkgs, $this->pkgs($this->phpVer, $this->debianVer));
        $file->install($pkgs);

        // init env
        foreach ($this->init($this->phpVer, $this->debianVar) as $acts) {
            foreach ($acts as $act) {
                list($method, $arg) = $act;
                call_user_func_array(array($file, $method), $arg);
            }
        }

        $file
            ->wget('https://github.com/phpbrew/phpbrew/raw/master/phpbrew', '/usr/local/bin/phpbrew')
            ->chmod('a+x', '/usr/local/bin/phpbrew')
            ->uStart($this->user)
            ->shell('phpbrew init')
            ->appendToFile('source ~/.phpbrew/bashrc', '~/.bashrc')
            ->shell('source ~/.phpbrew/bashrc')
            ->shell('phpbrew update')
            ->gReset();

        $args = array_unique($this->args($this->phpVer, $this->debianVar));
        $cmd = sprintf('phpbrew install %s %s', $this->phpVer, implode(' ', $args));
        $file->shell($cmd)->gEnd()->uEnd();
    }
}
