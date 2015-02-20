FROM debian:jessie

ENV DB_DRIVER=mysql \
    ENV=production \
    DB_DATABASE=cachet \
    DB_HOST= \
    DB_USERNAME= \
    DB_PASSWORD=

COPY . /var/www/html/
WORKDIR /var/www/html/

# Using nodesource and debian jessie packages instead of compiling from scratch
RUN DEBIAN_FRONTEND=noninteractive  \
    echo "APT::Install-Recommends \"0\";" >> /etc/apt/apt.conf.d/02recommends && \
    echo "APT::Install-Suggests \"0\";" >> /etc/apt/apt.conf.d/02recommends && \
    apt-get -qq update && \
    apt-get -qq install ca-certificates apt-transport-https && \
    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 68576280 && \
    echo 'deb https://deb.nodesource.com/node jessie main' > /etc/apt/sources.list.d/nodesource.list && \
    apt-get -qq update && \
    apt-get -qq install \
    nginx php5-fpm=5.* php5-curl php5-readline php5-mcrypt php5-mysql php5-apcu php5-cli \
    git sqlite libsqlite3-dev nodejs curl supervisor && \
    npm install && node_modules/.bin/bower install --allow-root && node_modules/.bin/gulp && \
    rm -rf /tmp/* node_modules/ && \
    apt-get clean && \
    rm -r /var/lib/apt/lists/* && \
    chown -R www-data /var/www/html

# Ensure the assets have been compiled
RUN for d in public/{build,css,js} ; do test ! -d public/build && \
  echo "Run 'gulp' before building container" >&2 && exit 1 || : ; done

# Hardcode the Illuminate key in app/config/app.php. If you want security, feel free
# to override the key in your own container with a 'php artisan key:generate' :)
RUN sed -i "s/'key' => '\w.*/'key' => 'f20d3e5ae02125a94bd60203a4edfbde',/" app/config/app.php && \
    grep key app/config/app.php

# copy the various nginx and supervisor conf (to handle both fpm and nginx)
RUN sed -i -e "s/;daemonize\s*=\s*yes/daemonize = no/g" /etc/php5/fpm/php-fpm.conf ;\
    echo "daemon off;" >> /etc/nginx/nginx.conf ;\
    ln -sf /var/www/html/php-fpm-pool.conf /etc/php5/fpm/pool.d/www.conf ;\
    rm -f /etc/nginx/sites-enabled/* && rm -f /etc/nginx/conf.d/* && ln -sf /var/www/html/nginx-site.conf /etc/nginx/conf.d/default.conf

RUN curl -sS https://getcomposer.org/installer | php && php composer.phar install --no-dev -o

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 8000

CMD ["/usr/bin/supervisord"]
