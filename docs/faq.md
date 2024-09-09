# Frequently Asked Questions

## Logging In

### I can't login to Cachet, can you reset my password?

We don't have access to your installation, but you are able to reset your password manually:

Follow the commands below, replacing `:userId` with the ID of your user. The initially created user will be `1`.

```bash
$ cd /var/www/ # the root of your Cachet installation
$ php artisan tinker
Psy Shell v0.8.8 (PHP 7.1.6 — cli) by Justin Hileman
>>> $user = CachetHQ\Cachet\Models\User::find(:userId);
=> CachetHQ\Cachet\Models\User {#865
    id: 1,
    username: "test",
    email: "test@example.com",
    api_key: "9yMHsdioQosnyVK4iCVR",
    active: 1,
    level: 1,
    created_at: "2015-07-24 13:42:10",
    updated_at: "2015-07-28 15:12:55",
}
>>> $user->update(['password' => 'New Password']);
>>> exit
```

## Databases

### Does Cachet support database X?

Cachet has built-in support for:

- MySQL/MariaDB
- SQLite
- PostgreSQL
- SQL Server

### Can Cachet support database X?

Cachet is built on the [Laravel](https://laravel.com) framework. By default,
Laravel supports the databases listed above but can be extended to support
new drivers, so whilst technically possible, it's not within scope of the
core team to provide support.

Each new driver requires additional support, testing and maintenance to
retain compatibility with the features we want to build into Cachet in the
future.

## Support and troubleshooting

### Do you offer paid support for Cachet?

We have been experimenting with paid support for Cachet at a limited scale.
Cachet is not a full-time job, so our time is low and we cannot yet
promise that your support request will be dealt with immediately.

## Cachet usage

### Why isn't the _Subscribe_ button enabled?

Cachet checks some informations before displaying the _Subscribe_ button,
because checking the "Enable subscribers" is not enough.
To see the _Subscribe_ button you need to:

- Check the box "Enable subscribers" in the settings.
- Set the `MAIL_*` option in your `.env` file.

The second item is important, because if your mail is not well configured you
won't be able to send mails to your subscribers.

> Note: The MAIL\_NAME **is** mandatory too, it is the sender name.
