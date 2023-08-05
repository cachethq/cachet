.PHONY: tests

include .env
export


run:
	php artisan config:cache -vvv
	php artisan config:clear -vvv
	php artisan cache:clear -vvv
	php artisan serve -vvv --host=${APP_URN}

test:
	php artisan config:cache -vvv
	php artisan config:clear -vvv
	php artisan cache:clear -vvv
	./vendor/bin/phpunit -v
reload:
	php artisan cache:clear
	php artisan config:clear