#!/bin/bash
set -e

APP_ENV=${APP_ENV:-local}
APP_DEBUG=${APP_DEBUG:-true}
APP_URL=${APP_URL:-http://localhost}
APP_KEY=${APP_KEY:-SomeRandomString}

DB_DRIVER=${DB_DRIVER:-mysql}
DB_HOST=${DB_HOST:-mysql}
DB_DATABASE=${DB_DATABASE:-cachet}
DB_USERNAME=${DB_USERNAME:-cachet}
DB_PASSWORD=${DB_PASSWORD:-cachet}

CACHE_DRIVER=${CACHE_DRIVER:-file}
SESSION_DRIVER=${SESSION_DRIVER:-file}
QUEUE_DRIVER=${QUEUE_DRIVER:-database}

MAIL_DRIVER=${MAIL_DRIVER:-smtp}
MAIL_HOST=${MAIL_HOST:-mailtrap.io}
MAIL_PORT=${MAIL_PORT:-2525}
MAIL_USERNAME=${MAIL_USERNAME:-null}
MAIL_PASSWORD=${MAIL_PASSWORD:-null}
MAIL_ADDRESS=${MAIL_ADDRESS:-null}
MAIL_NAME=${MAIL_NAME:-null}

# configure env file

sed 's,{{APP_ENV}},'"${APP_ENV}"',g' -i /var/www/html/.env
sed 's,{{APP_DEBUG}},'"${APP_DEBUG}"',g' -i /var/www/html/.env
sed 's,{{APP_URL}},'"${APP_URL}"',g' -i /var/www/html/.env
sed 's,{{APP_KEY}},'"${APP_KEY}"',g' -i /var/www/html/.env

sed 's,{{DB_DRIVER}},'"${DB_DRIVER}"',g' -i /var/www/html/.env
sed 's,{{DB_HOST}},'"${DB_HOST}"',g' -i /var/www/html/.env
sed 's,{{DB_DATABASE}},'"${DB_DATABASE}"',g' -i /var/www/html/.env
sed 's,{{DB_USERNAME}},'"${DB_USERNAME}"',g' -i /var/www/html/.env
sed 's,{{DB_PASSWORD}},'"${DB_PASSWORD}"',g' -i /var/www/html/.env

sed 's,{{CACHE_DRIVER}},'"${CACHE_DRIVER}"',g' -i /var/www/html/.env
sed 's,{{SESSION_DRIVER}},'"${SESSION_DRIVER}"',g' -i /var/www/html/.env
sed 's,{{QUEUE_DRIVER}},'"${QUEUE_DRIVER}"',g' -i /var/www/html/.env

sed 's,{{MAIL_DRIVER}},'"${MAIL_DRIVER}"',g' -i /var/www/html/.env
sed 's,{{MAIL_HOST}},'"${MAIL_HOST}"',g' -i /var/www/html/.env
sed 's,{{MAIL_PORT}},'"${MAIL_PORT}"',g' -i /var/www/html/.env
sed 's,{{MAIL_USERNAME}},'"${MAIL_USERNAME}"',g' -i /var/www/html/.env
sed 's,{{MAIL_PASSWORD}},'"${MAIL_PASSWORD}"',g' -i /var/www/html/.env
sed 's,{{MAIL_ADDRESS}},'"${MAIL_ADDRESS}"',g' -i /var/www/html/.env
sed 's,{{MAIL_NAME}},'"${MAIL_NAME}"',g' -i /var/www/html/.env

#Clear cache
/usr/bin/php composer.phar install --no-dev -o

echo "Starting supervisord..."
exec /usr/bin/supervisord -n -c /etc/supervisor/supervisord.conf

exit 0
