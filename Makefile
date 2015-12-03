#!/usr/bin/make -f

.PHONY: lint check update force-update phpcs

lint:
	find src -name '*.php' -exec php -l {} \;
	php -l test.php

check: lint

composer.phar:
	curl -sS https://getcomposer.org/installer | php

vendor/autoload.php: update

composer.lock: composer.json composer.phar
	./composer.phar update

update: composer.phar
	./composer.phar install

force-update: composer.phar
	./composer.phar selfupdate
	./composer.phar update

phpcs:
	vendor/bin/phpcs --report=checkstyle --report-file=checkstyle.xml --standard=PSR2 --extensions=php --ignore=autoload.php src || echo
