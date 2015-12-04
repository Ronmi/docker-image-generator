# Docker Image Generator

```php
$user = get_current_user();

$file = (new Fruit\DockerKit\Dockerfile('debian:jessie', 'Ronmi Ren <ronmi@patrolavia.com>'))
    ->distro('debian')
    ->ensureBash()
    ->gStart(true)
    ->addGroup($user, getmygid())
    ->addUser($user, getmyuid(), getmygid())
    ->gEnd()
    ->install(
        (new Phpbrew\DIG\PHPBrewInstaller('5.6', 'jessie', $user))
        ->variants(['default', 'fpm'])
    );

echo $file->generate();
```

## Progress

### Debian jessie (stable)

- [x] 5.6 - +default
- [ ] 5.6 - +everything
- [ ] 5.6 - all variants
- [x] 5.5 - +default
- [ ] 5.5 - +everything
- [ ] 5.5 - all variants
- [ ] 7 - +default
- [ ] 7 - +everything
- [ ] 7 - all variants
- [x] 5.4 - +default
- [ ] 5.4 - +everything
- [ ] 5.4 - all variants
- [ ] 5.3 - +default
- [ ] 5.3 - +everything
- [ ] 5.3 - all variants

### Debian stretch (testing)

- [ ] 5.6 - +default
- [ ] 5.6 - +everything
- [ ] 5.6 - all variants
- [ ] 5.5 - +default
- [ ] 5.5 - +everything
- [ ] 5.5 - all variants
- [ ] 7 - +default
- [ ] 7 - +everything
- [ ] 7 - all variants
- [ ] 5.4 - +default
- [ ] 5.4 - +everything
- [ ] 5.4 - all variants
- [ ] 5.3 - +default
- [ ] 5.3 - +everything
- [ ] 5.3 - all variants

### Ubuntu 15.10

- [ ] 5.6 - +default
- [ ] 5.6 - +everything
- [ ] 5.6 - all variants
- [ ] 5.5 - +default
- [ ] 5.5 - +everything
- [ ] 5.5 - all variants
- [ ] 7 - +default
- [ ] 7 - +everything
- [ ] 7 - all variants
- [ ] 5.4 - +default
- [ ] 5.4 - +everything
- [ ] 5.4 - all variants
- [ ] 5.3 - +default
- [ ] 5.3 - +everything
- [ ] 5.3 - all variants

### Ubuntu 15.04

- [ ] 5.6 - +default
- [ ] 5.6 - +everything
- [ ] 5.6 - all variants
- [ ] 5.5 - +default
- [ ] 5.5 - +everything
- [ ] 5.5 - all variants
- [ ] 7 - +default
- [ ] 7 - +everything
- [ ] 7 - all variants
- [ ] 5.4 - +default
- [ ] 5.4 - +everything
- [ ] 5.4 - all variants
- [ ] 5.3 - +default
- [ ] 5.3 - +everything
- [ ] 5.3 - all variants

### Ubuntu 14.10

- [ ] 5.6 - +default
- [ ] 5.6 - +everything
- [ ] 5.6 - all variants
- [ ] 5.5 - +default
- [ ] 5.5 - +everything
- [ ] 5.5 - all variants
- [ ] 7 - +default
- [ ] 7 - +everything
- [ ] 7 - all variants
- [ ] 5.4 - +default
- [ ] 5.4 - +everything
- [ ] 5.4 - all variants
- [ ] 5.3 - +default
- [ ] 5.3 - +everything
- [ ] 5.3 - all variants

### Ubuntu 14.04 LTS

- [ ] 5.6 - +default
- [ ] 5.6 - +everything
- [ ] 5.6 - all variants
- [ ] 5.5 - +default
- [ ] 5.5 - +everything
- [ ] 5.5 - all variants
- [ ] 7 - +default
- [ ] 7 - +everything
- [ ] 7 - all variants
- [ ] 5.4 - +default
- [ ] 5.4 - +everything
- [ ] 5.4 - all variants
- [ ] 5.3 - +default
- [ ] 5.3 - +everything
- [ ] 5.3 - all variants
