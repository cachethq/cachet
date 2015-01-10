FROM php:5.4-apache

# before building
# run npm install
# run node_modules/.bin/bower install
# run node_modules/.bin/gulp

RUN apt-get update && \
  apt-get install -y curl libmcrypt-dev zlib1g-dev libxml2-dev \
  git sqlite libsqlite3-dev --no-install-recommends && \
  rm -r /var/lib/apt/lists/*
COPY . /var/www/html/
WORKDIR /var/www/html/

RUN sed -i -e 's/^DocumentRoot .*/DocumentRoot \/var\/www\/html\/public/' /etc/apache2/apache2.conf
# public/.htaccess needs to use rewrite to let laravel do its thang
RUN a2enmod rewrite

# nodejs setup
#RUN curl -sL https://deb.nodesource.com/setup | bash -
#RUN apt-get install -y nodejs build-essential && rm -r /var/lib/apt/lists/*
#RUN npm install -g gulp && npm install && bower install && gulp

RUN docker-php-ext-install zip
RUN docker-php-ext-install mcrypt
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install xml
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN curl http://pecl.php.net/get/APC-3.1.13.tgz -o /usr/src/php/ext/apc.tar.gz && \
  tar xzvf /usr/src/php/ext/apc.tar.gz -C /usr/src/php/ext && \
  mv /usr/src/php/ext/APC-3.1.13 /usr/src/php/ext/apc && \
  docker-php-ext-install apc
RUN curl -sS https://getcomposer.org/installer | php
RUN php composer.phar install --no-dev -o

ENV DB_DRIVER=mysql ENV=production

RUN php artisan key:generate
