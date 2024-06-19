FROM alpine:3.19 AS base

# Install all reqeuired packages
RUN apk update \
    && apk add --no-cache \
    php82 \
    php82-common \
    php82-bcmath \
    php82-ctype \
    php82-fileinfo \
    php82-json \
    php82-opcache \
    php82-mbstring \
    php82-openssl \
    php82-pdo \
    php82-tokenizer \
    php82-simplexml \
    php82-xml \
    php82-xmlreader \
    php82-xmlwriter \
    php82-curl \
    php82-dom \
    php82-gd \
    php82-iconv \
    php82-intl \
    php82-pcntl \
    php82-phar \
    php82-posix \
    php82-fpm \
    php82-soap \
    php82-zip \
    php82-pdo_mysql \
    php82-pdo_pgsql \
    php82-pecl-redis \
    php82-pecl-mongodb \
    curl \
    coreutils \
    supercronic \
    supervisor \
    tzdata \
    nginx \
    npm

# Create symlink so php would resolve and be callable
RUN ln -sf /usr/bin/php82 /usr/bin/php

# Install composer and also check a valid checksum
RUN php82 -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && echo "$(curl 'https://composer.github.io/installer.sig')  composer-setup.php" | sha384sum -c - \
    && php82 composer-setup.php \
    && php82 -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer.phar \
    && ln -sf /usr/local/bin/composer.phar /usr/local/bin/composer
  
# Setup varuiables for php-fpm and php.ini 
RUN sed -E -i 's/^;?expose_php\s?=.*/expose_php=Off/' /etc/php82/php.ini \
    && sed -E -i 's/^;?opcache.enable_cli\s?=.*/opcache.enable_cli=1/' /etc/php82/php.ini \
    && sed -E -i 's/^;?user\s?=.*/user = www-data/' /etc/php82/php-fpm.d/www.conf \
    && sed -E -i 's/^;?group\s?=.*/group = www-data/' /etc/php82/php-fpm.d/www.conf \
    && sed -E -i 's|^;?listen\s?=.*|listen = /var/run/php-fpm.sock|' /etc/php82/php-fpm.d/www.conf \
    && sed -E -i 's/^;?listen.owner\s?=.*/listen.owner = www-data/' /etc/php82/php-fpm.d/www.conf \
    && sed -E -i 's/^;?listen.group\s?=.*/listen.group = www-data/' /etc/php82/php-fpm.d/www.conf \
    && sed -E -i 's/^;?clear_env\s?=.*/clear_env = no/' /etc/php82/php-fpm.d/www.conf \
    && sed -E -i 's/^;?catch_workers_output\s?=.*/catch_workers_output = yes/' /etc/php82/php-fpm.d/www.conf \
    && sed -E -i 's/^;?memory_limit\s?=.*/memory_limit = 64M/' /etc/php82/php.ini \
    && sed -E -i 's/^;?upload_max_filesize\s?=.*/upload_max_filesize = 32M/' /etc/php82/php.ini \
    && sed -E -i 's/^;?post_max_size\s?=.*/post_max_size = 32M/' /etc/php82/php.ini \
    && sed -E -i 's/^;?opcache.enable\s?=.*/opcache.enable=1/' /etc/php82/php.ini \
    && sed -E -i 's/^;?opcache.memory_consumption\s?=.*/opcache.memory_consumption=128/' /etc/php82/php.ini \
    && sed -E -i 's/^;?opcache.interned_strings_buffer\s?=.*/opcache.interned_strings_buffer=64/' /etc/php82/php.ini \
    && sed -E -i 's/^;?opcache.validate_timestamps\s?=.*/opcache.validate_timestamps=0/' /etc/php82/php.ini \
    && sed -E -i 's/^;?session.gc_probability\s?=.*/session.gc_probability=0/' /etc/php82/php.ini \
    && sed -E -i 's|^;?pidfile\s?=.*|pidfile=/run/supervisord.pid|' /etc/supervisord.conf
    
WORKDIR /var/www
# Setup a new user for php
RUN adduser -S -u 1001 -G www-data www-data \
    && chown -R www-data:www-data .

COPY docker/supervisor/*.ini /etc/supervisor.d/
COPY docker/entrypoint.sh /
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/99-overrides.conf /etc/php82/php-fpm.d/

# Create required directory and permisions
RUN mkdir -p /var/lib/nginx/tmp/ /var/log/supervisord/ \
    && chown -R 1001 /var/lib/nginx \
    && chmod -R 755 /var/lib/nginx \
    && chmod +x /entrypoint.sh

COPY composer.* .
  
RUN composer install --no-dev --no-cache --no-autoloader --no-scripts --no-ansi
  
COPY --chown=www-data:www-data ./ ./

RUN composer dump-autoload

RUN npm install

RUN npm run build

RUN mkdir -p ./storage/logs

ENTRYPOINT ["/entrypoint.sh"]
