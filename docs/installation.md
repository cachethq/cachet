# Install Cachet

This guide will detail how to install Cachet on your server.

## Download the source code with Git

> **Check out the latest version!**
> 
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
>
> Any values with spaces in them should be contained within double quotes.

The `.env` file set environment variables that will be used by the application.

> **SQLite hosts**
>
> If you're using SQLite then your .env file should not contain a
> `DB_HOST` key. You'll also need to touch ./database/database.sqlite
> and give it the required permissions.

## Installing Composer

Cachet uses dependencies, so it's required to have Composer installed.  
Composer can be installed following the [official guide][1]

## Installing Composer

```bash
composer install --no-dev -o
```

If you are installing Cachet as a contributor, you can forget the `--no-dev`
option.

> **Tip for Windows users**
>
> If you're stuck at the Composer stage, you can run
> `composer install --no-dev -o --no-scripts`
> which usually fixes any issues on Windows servers.

## Using the install command

Cachet comes with an installation command that will:

- Run migrations
- Run seeders (of which there are none)

```bash
php artisan app:install
```

> Never change the `APP_KEY` after installation on production environment.
> This will result in all of your encrypted/hashed data being lost.

> **Getting a 500 - Internal Server Error?**
>
> If you get a 500 error when visiting your status page, you may need to
> run `chmod -R 777 storage/` for it to work or `rm -rf bootstrap/cache/*`

You can also try to give permissions to cache chmod -R 777 bootstrap/



[1]: https://getcomposer.org/download/
