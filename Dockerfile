FROM debian:jessie

# Using nodesource and debian jessie packages instead of compiling from scratch
RUN DEBIAN_FRONTEND=noninteractive \
    echo "APT::Install-Recommends \"0\";" >> /etc/apt/apt.conf.d/02recommends && \
    echo "APT::Install-Suggests \"0\";" >> /etc/apt/apt.conf.d/02recommends && \
    apt-get -qq update && \
    apt-get -qq install \
    ca-certificates nginx php5-fpm=5.* php5-curl php5-readline php5-mcrypt php5-mysql php5-apcu php5-cli \
    git sqlite libsqlite3-dev curl supervisor php5-pgsql && \
    apt-get clean && apt-get autoremove -qq && \
    rm -rf /var/lib/apt/lists/* /usr/share/doc /usr/share/man /tmp/*

COPY docker/supervisord.conf /etc/supervisor/supervisord.conf
COPY docker/entrypoint.sh /sbin/entrypoint.sh
COPY . /var/www/html/
WORKDIR /var/www/html/

# copy the various nginx and supervisor conf (to handle both fpm and nginx)
RUN sed -i -e "s/;daemonize\s*=\s*yes/daemonize = no/g" /etc/php5/fpm/php-fpm.conf ;\
    echo "daemon off;" >> /etc/nginx/nginx.conf ;\
    mv /var/www/html/docker/php-fpm-pool.conf /etc/php5/fpm/pool.d/www.conf ;\
    rm -f /etc/nginx/sites-enabled/* ;\
    rm -f /etc/nginx/conf.d/* ;\
    mv /var/www/html/docker/nginx-site.conf /etc/nginx/conf.d/default.conf ;\
    mv /var/www/html/docker/.env.docker /var/www/html/.env ;\
    rm -r /var/www/html/docker ;\
    chown -R www-data /var/www/html ;\
    curl -sS https://getcomposer.org/installer | php && php composer.phar install --no-dev -o

EXPOSE 8000

COPY crontab /etc/cron.d/artisan-schedule
RUN chmod 0644 /etc/cron.d/artisan-schedule
RUN touch /var/log/cron.log

CMD ["/sbin/entrypoint.sh"]
