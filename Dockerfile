FROM php:5.4-apache

# before building
# run npm install
# run node_modules/.bin/bower install
# run node_modules/.bin/gulp

RUN apt-get update && apt-get install -y libmcrypt-dev zlib1g-dev git sqlite libsqlite3-dev --no-install-recommends && rm -r /var/lib/apt/lists/*
COPY . /var/www/html/
WORKDIR /var/www/html/
RUN docker-php-ext-install mcrypt
RUN docker-php-ext-install zip
#RUN docker-php-ext-install pdo_sqlite
RUN docker-php-ext-install pdo_mysql
RUN curl http://pecl.php.net/get/APC-3.1.13.tgz -o /usr/src/php/ext/apc.tar.gz && \
  tar xzvf /usr/src/php/ext/apc.tar.gz -C /usr/src/php/ext && \
  mv /usr/src/php/ext/APC-3.1.13 /usr/src/php/ext/apc && \
  docker-php-ext-install apc
RUN curl -sS https://getcomposer.org/installer | php
RUN php composer.phar install --no-dev -o

#ENV DB_DRIVER=mysql DB_DATABASE=cachet DB_HOST=192.168.59.103 DB_USERNAME=cachet DB_PASSWORD=cachet
#ENV DB_DRIVER=sqlite DB_DATABASE='' DB_HOST='' DB_USERNAME='' DB_PASSWORD=''
ENV DB_DRIVER=mysql \
    DB_DATABASE=$MYSQL_ENV_MYSQL_DATABASE \
    DB_HOST=$MYSQL_PORT_3306_TCP_ADDR \
    DB_USERNAME=$MYSQL_ENV_MYSQL_USER \
    DB_PASSWORD=$MYSQL_ENV_MYSQL_PASSWORD \
    ENV=production
# WTF. none of these work
COPY ./php.ini /usr/local/lib/
COPY ./php.ini /usr/local/etc/
COPY ./php.ini /usr/local/etc/php/conf.d/

#RUN php artisan migrate
RUN php artisan key:generate
