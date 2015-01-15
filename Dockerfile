FROM php:5.6-apache

# before building
# run npm install
# run node_modules/.bin/bower install
# run node_modules/.bin/gulp

ENV DB_DRIVER=mysql \
    ENV=production \
    DB_DATABASE=cachet \
    DB_HOST= \
    DB_USERNAME= \
    DB_PASSWORD=
COPY . /var/www/html/
WORKDIR /var/www/html/

RUN curl http://nodejs.org/dist/v0.10.35/node-v0.10.35-linux-x64.tar.gz -o /tmp/nodejs.tar.gz && \
    tar xzf /tmp/nodejs.tar.gz -C /tmp && export PATH=/tmp/node-v0.10.35-linux-x64/bin:$PATH && \
    npm install && node_modules/.bin/bower install --allow-root && node_modules/.bin/gulp && \
    rm -rf /tmp/* node_modules/
# ensure the assets have been compiled
RUN for d in public/{build,css,js} ; do test ! -d public/build && \
  echo "Run 'gulp' before building container" >&2 && exit 1 || : ; done

RUN apt-get update && \
  apt-get install -y curl libmcrypt-dev zlib1g-dev libxml2-dev \
  git sqlite libsqlite3-dev --no-install-recommends && \
  rm -r /var/lib/apt/lists/*

# hardcode the Illuminate key in app/config/app.php. If you want security, feel free
# to override the key in your own container with a 'php artisan key:generate' :)
RUN sed -i "s/'key' => '\w.*/'key' => 'f20d3e5ae02125a94bd60203a4edfbde',/" app/config/app.php && \
    grep key app/config/app.php

# Override the apache.conf in php:5.4-apache to point to the proper DocumentRoot
# TODO this is pretty brittle and may break if php:5.4-apache changes
RUN sed -i 's/^DocumentRoot .*/DocumentRoot \/var\/www\/html\/public/' /etc/apache2/apache2.conf && \
    grep /var/www/html/public /etc/apache2/apache2.conf
# public/.htaccess needs to use rewrite to let laravel do its thang
RUN a2enmod rewrite

# install dependencies. Note: PDO and XML are already in this base image
RUN docker-php-ext-install zip && \
    docker-php-ext-install mcrypt && \
    docker-php-ext-install mbstring && \
    docker-php-ext-install pdo_mysql
RUN curl http://pecl.php.net/get/apcu-4.0.7.tgz -o /usr/src/php/ext/apcu.tar.gz && \
    tar xzvf /usr/src/php/ext/apcu.tar.gz -C /usr/src/php/ext && \
    mv /usr/src/php/ext/apcu-4.0.7 /usr/src/php/ext/apcu && \
    docker-php-ext-install apcu
RUN curl -sS https://getcomposer.org/installer | php
RUN php composer.phar install --no-dev -o

