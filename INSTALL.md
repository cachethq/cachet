# Installation

Cachet is written in PHP and uses SQLite/MySQL for its database. It's really easy to get setup and there are various ways you can install.

You need at least PHP and the `php-mcrypt` extension installed to run Cachet.

1. [Get a copy!](#get-a-copy)
2. [Configuring a database!](#configuring-a-database)
	1. [Running database migrations](#running-database-migrations)
3. [Apache setup](#apache)

## Get a copy!

The easiest way is to use Git to pull down the code. You'll need to put it into your web server directory for Apache & Nginx.

```bash
$ cd /var/www
$ git clone git@github.com:jbrooksuk/Cachet.git
```

## Configuring a database

Cachet relies on a database to store the components and incidents, but by default the configuration is left with SQLite. This is great if you're not pushing the repository to Heroku, Dokku or other virtual containers as the information will be lost each time you push.

There is no administration panel for adding issues, so be sure to pick a database driver which you can manage the database with.

Laravel 4 uses a neat configuration setup. To change our database we need to open up `./app/config/database.php`.

By default we'll see this:

```php
'default' => 'sqlite',
'connections' => array(
	'sqlite' => array(
		'driver'   => 'sqlite',
		'database' => __DIR__.'/../database/production.sqlite',
		'prefix'   => '',
	),
	'mysql' => array(
		'driver'    => 'mysql',
		'host'      => 'localhost',
		'database'  => 'database',
		'username'  => 'root',
		'password'  => '',
		'charset'   => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix'    => '',
	),
	'pgsql' => array(
		'driver'   => 'pgsql',
		'host'     => 'localhost',
		'database' => 'database',
		'username' => 'root',
		'password' => '',
		'charset'  => 'utf8',
		'prefix'   => '',
		'schema'   => 'public',
	),
	'sqlsrv' => array(
		'driver'   => 'sqlsrv',
		'host'     => 'localhost',
		'database' => 'database',
		'username' => 'root',
		'password' => '',
		'prefix'   => '',
	),
)
```

Laravel uses PDO for its database driver so it should be compatible with:

- SQLite
- MySQL
- Postgresql
- MSSQL

However Cachet is untested with only SQLite and MySQL.

All we're doing in this file is changing the connection properties of whichever database engine we want to use. For example, if we want to use MySQL, then we'd do this:

```php
'mysql' => array(
	'driver'    => 'mysql',
	'host'      => 'db.domain.com',
	'database'  => 'cachet',
	'username'  => 'user',
	'password'  => 'password',
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => '',
),
```

Then we change the `default` value above to use the `mysql` index (which could be renamed if you wanted to) we've just changed:

```php
'default' => 'mysql'
```

### Running database migrations

Once we've decided on our database, we now need to run the migrations to create the tables. Again, by default Cachet uses SQLite and the database file can be found at `./app/database/production.sqlite`, however we will first need to create the file:

```bash
$ touch ./app/database/production.sqlite
```

If you've renamed the database above, then be sure to mimic the change here too.

In our command line we need to run the migrations, from within the root directory:

```bash
$ php artisan migrate
```

You should should see the following output:

```bash
$ php artisan migrate
Migration table created successfully.
Migrated: 2014_11_16_224719_CreateIncidentsTable
Migrated: 2014_11_16_224937_CreateComponentsTable
Migrated: 2014_11_17_144232_CreateSettingsTable
```

## Apache

Apache is one of the easier installations. We simply need to create a new Virtual Host and add it to our `HOSTS` file.

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
