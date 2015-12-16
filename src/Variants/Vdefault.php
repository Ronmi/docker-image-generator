<?php

namespace PHPBrew\DIG\Variants;

class Vdefault extends \PHPBrew\DIG\Variant
{
    public function deps()
    {
        return array(
            'bcmath',
            'bz2',
            'calendar',
            'cli',
            'ctype',
            'curl',
            'dom',
            'fileinfo',
            'filter',
            'ipc',
            'json',
            'mbregex',
            'mbstring',
            'mhash',
            'mcrypt',
            'openssl',
            'pcntl',
            'pcre',
            'pdo',
            'phar',
            'posix',
            'readline',
            'sockets',
            'tokenizer',
            'xml',
            'zip',
        );
    }
}
