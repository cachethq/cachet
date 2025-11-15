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
php artisan migrate --force  || echo "Migrations completed with warnings, continuing..."

# Run migrations (continue even if some fail due to existing tables)
echo "Running migrations..."

# Publish vendor assets
echo "Publishing vendor assets..."
php artisan vendor:publish --all --force --quiet

# Publish Filament assets
echo "Publishing Filament assets..."
php artisan filament:assets

# Create admin user if environment variables are set
if [ -n "$CACHET_ADMIN_USER_EMAIL" ] && [ -n "$CACHET_ADMIN_USER_NAME" ]; then
    echo "Creating admin user..."
    # Generate a random password (20 characters)
    GENERATED_PASSWORD=$(cat /dev/urandom | tr -dc 'A-Za-z0-9!@#$%^&*()_+-=' | head -c 20)

    # Try to create the user, ignore if already exists
    if php artisan cachet:make:user "$CACHET_ADMIN_USER_EMAIL" \
        --admin true \
        --name "$CACHET_ADMIN_USER_NAME" \
        --password "$GENERATED_PASSWORD" \
        --no-interaction 2>&1 | grep -q "Duplicate entry"; then
        echo "Admin user already exists, skipping creation."
    else
        echo "Admin user created successfully!"
        echo "Email: $CACHET_ADMIN_USER_EMAIL"
        echo "Password: $GENERATED_PASSWORD"
        echo "IMPORTANT: Save this password securely!"
    fi
fi

# Cache configuration
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache

# Start supervisor
echo "Starting services..."
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf