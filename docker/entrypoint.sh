#!/bin/ash
set -o errexit -o nounset -o pipefail

PM_MAX_CHILDREN=${PM_MAX_CHILDREN:-5}
sed -E -i "s/^;?pm.max_children\s?=.*/pm.max_children = $PM_MAX_CHILDREN/" /etc/php82/php-fpm.d/www.conf

touch ./storage/logs/laravel.log
chown -R www-data:www-data ./storage/logs/laravel.log
php artisan vendor:publish -all
php artisan migrate --force
php artisan storage:link
php artisan config:cache

arg1="${1:-php-fpm}"
if [[ "$arg1" == "php-fpm" ]]; then
  echo "X"
  supervisord -c /etc/supervisord.conf
  env php-fpm82 -D
  exec nginx -g 'daemon off;'
else
  echo "X2"
  exec "$@"
fi
