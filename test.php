<?php
if (count($argv) < 6) {
    echo "Usage: test.php docker_image distro_version image_name php_ver variants...\n";
    exit(1);
}

list($me, $img, $ver, $name, $php) = $argv;
$vars = array_slice($argv, 5);

require('vendor/autoload.php');

$file = (new Fruit\DockerKit\Dockerfile($img, 'Ronmi Ren <ronmi@patrolavia.com>'))
    ->distro('debian')
    ->ensureBash()
    ->inst(
        (new PHPBrew\DIG\PHPBrewInstaller($php, $ver, 'root'))
        ->variants($vars)
    )
    ->workdir('/root')
    ->entrypoint(['bash']);
echo $file->generate() . "\n\n";

(new Fruit\DockerKit\DockerBuild($name))->run($file);
