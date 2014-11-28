# Installation

Cachet is an open source replacement to [StatusPage.io](https://statuspage.io) written in PHP and the [Laravel](http://laravel.com) framework.

You need at least PHP, [Composer](https://getcomposer.org/) and the `php-mcrypt` extension installed to run Cachet.

# Table of contents

1. [Get a copy!](#get-a-copy)
2. [Deploy to Heroku](#deploy-to-heroku)
3. [Configuring a database!](#configuring-a-database)
	1. [Running database migrations](#running-database-migrations)
4. [Running Cachet](#running-cachet)
	1. [Apache setup](#apache)
	2. [nginx setup](#nginx)
5. [Environment detection](#environment-detection)

# Get a copy!

> If you want to run Cachet locally or help develop then you'll want to use this method.

The easiest way is to use Git to pull down the code. You'll need to put it into your web server directory for Apache & Nginx.

```bash
$ cd /var/www
$ git clone https://github.com/jbrooksuk/Cachet.git
$ cd Cachet
$ composer install
```

# Deploy to Heroku

When using the **Deploy to Heroku** button you needn't worry about using a database as the install will setup a free instance of ClearDB. Once installed Heroku can direct you to the setup page where you'll configure the site/application information and create an administrator account.

# Configuring a database without Heroku

Cachet relies on a database to store the components and incidents, however it needs to be configured for your [environment](https://github.com/cachethq/Cachet/blob/master/INSTALL.md#environment-detection).

Our database configuration (`./app/config/database.php`) is setup to require the following environment variables:

- DB_DRIVER - `sqlite`, `mysql`, `pgsql` or `sqlsrv`.
- DB_HOST
- DB_DATABASE - SQLite file within the `app/database` directory or database name.
- DB_USERNAME
- DB_PASSWORD

Laravel uses PDO for its database driver so it should be compatible with:

- SQLite
- MySQL
- Postgresql
- MSSQL

No `.sqlite` file is included, so be sure to add this into your `app/database` directory.

Laravel 4 enables you to [protect your sensitive configuration details](http://laravel.com/docs/4.2/configuration#protecting-sensitive-configuration) with the use of .env files. For your production environment, create a `.env.php` file in the root of your project, or for environment specific create the file named `.env.environment.php`.

For example, if working locally with MySQL, your `.env.local.php` file would be:

```php
<?php

return [
	'DB_DRIVER' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_DATABASE' => 'cachet',
	'DB_USERNAME' => 'root',
	'DB_PASSWORD' => 'secret',
];

?>
```

> Even though SQLite doesn't require a host, username or password, these still must be set (an empty string will suffice).

### Running database migrations

Once we've decided on our database, we now need to run the migrations to create the tables.   In our command line we need to run the migrations, from within the root directory:

```bash
$ php artisan migrate
```

You should see the output of the current project migration files being migrated to your database.

# Running Cachet

## Apache

Apache is one of the easier installations. We simply need to create a new Virtual Host and add it to our `HOSTS` file.

We simply add the following Virtual Host to our `httpd-vhosts.conf` file:

```
<VirtualHost *:80>
	ServerName cachet.dev # Or whatever you want to use
	ServerAlias cachet.dev # Make this the same as ServerName
	DocumentRoot "/var/www/Cachet/public"
	<Directory "/var/www/Cachet/public">
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

## nginx

**TODO.**

# Environment Detection

If you're deploying into production you'll want to create an environmental variable as `ENV=production`. In the instance where the variable isn't defined, Cachet will think that it's `local`.

# Security

After deploying to a server that isn't [Heroku](#heroku) you should run `php artisan key:generate` before setting Cachet up. This changes the application key (found in `/app/config/app.php`) which is used for encryption.
