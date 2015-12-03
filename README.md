# Docker Image Generator

```php
$user = get_current_user();

$file = (new Fruit\DockerKit\Dockerfile('debian:jessie', 'Ronmi Ren <ronmi@patrolavia.com>'))
    ->distro('debian')
    ->ensureBash()
    ->gStart(true)
    ->addGroup($user, getmygid())
    ->addUser($user, getmyuid(), getmygid())
    ->gEnd();

(new Phpbrew\DIG\PhpbrewInstaller('5.6', 'jessie', $user))
    ->variants(['default', 'fpm'])->installTo($file);

echo $file->generate();
```
