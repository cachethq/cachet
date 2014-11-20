# Installation

Cachet is written in PHP and uses SQLite/MySQL for its database. It's really easy to get setup and there are various ways you can install.

## Get a copy!

The easiest way is to use Git to pull down the code. You'll need to put it into your web server directory for Apache & Nginx.

```bash
$ cd /var/www
$ git clone git@github.com:jbrooksuk/Cachet.git
```

## Configuring a database

Cachet relies on a database to store the components and incidents, but by default the configuration is left with SQLite. This is great if you're not pushing the repository to Heroku, Dokku or other virtual containers as the information will be lost each time you push.

There is no administration panel for adding issues, so be sure to pick a database driver which you can manage the database with.

## Apache

Apache is one of the easier installations. We simply need to create a new Virtual Host and add it to our `HOSTS` file.

Before we get started

We simply add the following Virtual Host to our `httpd-vhosts.conf` file:

```
<VirtualHost *:80>
    ServerName cachet.dev # Or whatever you want to use
    ServerAlias cachet.dev # Make this the same as ServerName
    DocumentRoot "/var/www//Cachet/public"
    <Directory "/var/www//Cachet/public">
        Require all granted # Used by Apache 2.4
        Options Indexes FollowSymLinks
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>
```

Next we add a lookup on our `HOSTS` file (if we're not serving Cachet externally). So open up `/etc/hosts` or on Windows it'll be `C:\Windows\System32\drivers\etc\hosts` and add this line:

```
127.0.0.1 cachet.dev
```

Restart Apache and you're done!
