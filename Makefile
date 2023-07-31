.PHONY: tests

include .env
export


run:
	php artisan config:cache -vvv
	php artisan config:clear -vvv
	php artisan cache:clear -vvv
	composer dump-autoload -o -vvv -d /home/flo/Cachet/
	php artisan serve -vvv --host=${APP_URN}

test:
	php artisan config:cache -vvv
	php artisan config:clear -vvv
	php artisan cache:clear -vvv
	composer dump-autoload -o -vvv -d /home/flo/Cachet/
	./vendor/bin/phpunit -v