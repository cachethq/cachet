# Install Cachet

This guide will detail how to install Cachet on your server.

## Download the source code with Git

> **Check out the latest version!**
> The tags below are examples of what will be shown.
> You should always run git checkout on the latest tag.

```
$ cd /var/www # Or wherever you chose to install web applications to
$ git clone https://github.com/CachetHQ/Cachet.git
$ cd Cachet
$ git tag -l

v2.3.1
v2.3.10
v2.3.11
v2.3.12
v2.3.13
v2.3.14

git checkout v2.3.14
```

## Editing the configuration file

By default Cachet comes with a `.env.example` file. You'll need to copy this
file to `.env` regardless of what environment you're working on.

> On Windows you can use `copy .env.example .env` if you can't do it using the
> explorer.

It's now just a case of editing this new .env file and setting the values of your setup.

> **Environment Configuration Notice**
> Any values with spaces in them should be contained within double quotes.

The `.env` file set environment variables that will be used by the application.

> **SQLite hosts**
> If you're using SQLite then your .env file should not contain a
> `DB_HOST` key. You'll also need to touch ./database/database.sqlite
> and give it the required permissions.

## Installing Composer

Cachet uses dependencies, so it's required to have Composer installed.
Composer can be installed following the [official guide][1]

## Installing dependencies

```bash
composer install --no-dev -o
```

If you are installing Cachet as a contributor, you can forget the `--no-dev`
option.

> **Tip for Windows users**
> If you're stuck at the Composer stage, you can run
> `composer install --no-dev -o --no-scripts`
> which usually fixes any issues on Windows servers.

## Using the install command

Cachet comes with an installation command that will:

- Run migrations
- Run seeders (of which there are none)

```bash
php artisan cachet:install
```

> Never change the `APP_KEY` after installation on production environment.
> This will result in all of your encrypted/hashed data being lost.

> **Getting a 500 - Internal Server Error?**
> If you get a 500 error when visiting your status page, you may need to
> run `chmod -R 755 .env bootstrap/cache storage`.
> Also if you set value `file` for `CACHE_DRIVER` and `SESSION_DRIVER` parameters in `.env` file run `chmod -R 755 bootstrap/cachet`.
> Finally run `rm -rf bootstrap/cache/*` for delete old cache.

## Running Cachet on Apache

> **Required Apache Modules**
> You need to enable `mod_rewrite` for Apache. On Debian-based systems you can do this by
>
> `sudo a2enmod rewrite`

Once Cachet is setup, the Apache installation is as simple as creating a
new Virtual Host entry in the httpd-vhosts.conf file.

```
<VirtualHost *:80>
    ServerName cachet.dev
    # Or whatever you want to use
    ServerAlias cachet.dev
    # Make this the same as ServerName
    DocumentRoot "/var/www/Cachet/public"
    <Directory "/var/www/Cachet/public">
        Require all granted
        # Used by Apache 2.4
        Options Indexes FollowSymLinks
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>
```

Restart Apache by running the following:

`sudo service apache2 restart`


If you also need HTTPS on apache you will need to get the ssl mod installed
and the default ssl conf file enabled. See DigitalOcean's [documentation][2].

## Running Cachet on nginx

- You'll need to install php5-fpm - [DigitalOcean][3] has a nice LEMP installation tutorial
- Generate your SSL key+certificate
- Create a new vhost such as `/etc/nginx/sites-enabled/cachet.conf:`

```
# Upstream to abstract backend connection(s) for php
upstream php {
    server unix:/tmp/php-cgi.socket;
    server 127.0.0.1:9000;
}

server {
    server_name  cachet.mycompany.com; # Or whatever you want to use
    listen 80 default;
    rewrite ^(.*) https://cachet.mycompany.com$1 permanent;
}

# HTTPS server

server {
    listen 443;
    server_name cachet.mycompany.com;

    root /var/vhost/cachet.mycompany.com/public;
    index index.php;

    ssl on;
    ssl_certificate /etc/ssl/crt/cachet.mycompany.com.crt; # Or wherever your crt is
    ssl_certificate_key /etc/ssl/key/cachet.mycompany.com.key; # Or wherever your key is
    ssl_session_timeout 5m;

    # Best practice as at March 2014
    ssl_protocols TLSv1 TLSv1.1 TLSv1.2;
    ssl_prefer_server_ciphers on;
    ssl_ciphers "ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES256-GCM-SHA384:DHE-RSA-AES128-GCM-SHA256:DHE-DSS-AES128-GCM-SHA256:kEDH+AESGCM:ECDHE-RSA-AES128-SHA256:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA:ECDHE-ECDSA-AES128-SHA:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA:ECDHE-ECDSA-AES256-SHA:DHE-RSA-AES128-SHA256:DHE-RSA-AES128-SHA:DHE-DSS-AES128-SHA256:DHE-RSA-AES256-SHA256:DHE-DSS-AES256-SHA:DHE-RSA-AES256-SHA:AES128-GCM-SHA256:AES256-GCM-SHA384:AES128-SHA256:AES256-SHA256:AES128-SHA:AES256-SHA:AES:CAMELLIA:DES-CBC3-SHA:!aNULL:!eNULL:!EXPORT:!DES:!RC4:!MD5:!PSK:!aECDH:!EDH-DSS-DES-CBC3-SHA:!EDH-RSA-DES-CBC3-SHA:!KRB5-DES-CBC3-SHA";
    ssl_buffer_size 1400; # 1400 bytes, within MTU - because we generally have small responses. Could increase to 4k, but default 16k is too big

    location / {
        add_header Strict-Transport-Security max-age=15768000;
        try_files $uri /index.php$is_args$args;
    }

    location ~ \.php$ {
                include fastcgi_params;
                fastcgi_pass unix:/var/run/php5-fpm.sock;
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                fastcgi_index index.php;
                fastcgi_keep_conn on;
                add_header Strict-Transport-Security max-age=15768000;
    }
}
```

Start php5-fpm and nginx and you're done!


[1]: https://getcomposer.org/download/
[2]: https://www.digitalocean.com/community/tutorials/how-to-create-a-ssl-certificate-on-apache-for-ubuntu-14-04
[3]: https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-ubuntu-12-04
