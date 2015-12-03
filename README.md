# Docker Image Generator

```php
$user = get_current_user();

$file = (new Fruit\DockerKit\Dockerfile('debian:jessie', 'Ronmi Ren <ronmi@patrolavia.com>'))
    ->distro('debian')
    ->ensureBash()
    ->gStart(true)
    ->repo(['deb http://debian.office.rde/debian jessie main' => null])
    ->addGroup($user, getmygid())
    ->addUser($user, getmyuid(), getmygid())
    ->gEnd();

(new Phpbrew\DIG\PhpbrewInstaller('5.6', 'jessie', $user))
    ->variants(['cli', 'fpm'])->installTo($file);

echo $file->generate();
```
