<?php
if (count($argv) !=6) {
    echo "Usage: test.php docker_image distro_version image_name php_ver variant\n";
    echo "variant can be all, everything or default\n";
    exit(1);
}

list($me, $img, $ver, $name, $php, $var) = $argv;

require('vendor/autoload.php');

$file = (new Fruit\DockerKit\Dockerfile($img, 'Ronmi Ren <ronmi@patrolavia.com>'))
    ->distro('debian')
    ->ensureBash()
    ->install(
        (new PHPBrew\DIG\PHPBrewInstaller($php, $ver, 'root'))
        ->variant($var)
    )
    ->workdir('/root')
    ->entrypoint(['bash']);
echo $file->generate() . "\n\n";

(new Fruit\DockerKit\DockerBuild($name))->run($file);
