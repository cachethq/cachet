#!/usr/bin/env bash

set -e

# Determine if our key file exists as this determine if we have a key already (and so run an upgrade) or need to do a new install
if [ ! -f ../../../shared/deploy.dog.cachet-key ]; then
    # File not found, new install
    echo "New Install"

    # Generate new key
    KEY=$(php artisan key:generate --show)

    # Add key into .env file
    sed "s\CACHET_KEY/$KEY/g" .env > .env

    # Install Cachet
    php artisan app:install

    # Store key for future
    echo "$KEY" > ../../../shared/deploy.dog.cachet-key

else
    # File found, we're upgrading
    echo "Upgrading"

    # Add key into .env file
    KEY=$(head -n 1 ../../../shared/deploy.dog.cachet-key)
    sed "s\CACHET_KEY/$KEY/g" .env > .env

    # Upgrade Cachet
    php artisan down
    php artisan app:update
fi
