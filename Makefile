.PHONY: phpunit
phpunit:
	vendor/bin/phpunit tests --testdox

.PHONY: phpstan
phpstan:
	vendor/bin/phpstan analyse

.PHONY: cs
cs:
	tools/php-cs-fixer/vendor/bin/php-cs-fixer fix --dry-run --diff

.PHONY: cs-fix
cs-fix:
	tools/php-cs-fixer/vendor/bin/php-cs-fixer fix
