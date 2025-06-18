#!/bin/sh
set -e

# Wait for database connection
echo "Waiting for database..."
for i in $(seq 1 30); do
    if php artisan tinker --execute="DB::connection()->getPdo();" >/dev/null 2>&1; then
        echo "Database connected!"
        break
    fi
    echo "Database not ready, waiting... ($i/30)"
    sleep 2
done

# Run migrations
echo "Running migrations..."
php artisan migrate --force

# Cache configuration
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache

# Start supervisor
echo "Starting services..."
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf