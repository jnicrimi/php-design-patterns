.PHONY: phpstan
phpstan:
	vendor/bin/phpstan analyse --configuration phpstan.neon --memory-limit=-1

.PHONY: cs
cs:
	tools/php-cs-fixer/vendor/bin/php-cs-fixer fix --dry-run --diff

.PHONY: cs-fix
cs-fix:
	tools/php-cs-fixer/vendor/bin/php-cs-fixer fix
