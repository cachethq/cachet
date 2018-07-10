# Configuring the queue

Cachet uses a queue to send Configuring Mail and Beacons without slowing down
the rest of the application. This can be setup in a variety of ways.

## Supervisor

The recommended setup for the queue is to use Supervisor.

Supervisor is a process manager which makes managing a number of
long-running programs a trivial task by providing a consistent interface
through which they can be monitored and controlled.

## Installations up to Cachet v2.3

`cachet.conf`

```
[program:cachet-queue]
command=php artisan queue:work --daemon --delay=2 --sleep=1 --tries=3
directory=/var/www/cachet/
redirect\_stderr=true
autostart=true
autorestart=true
user=cachet
```

## Installations from Cachet v2.4-dev onwards

`cachet.conf`

```
[program:cachet-queue]
command=php artisan queue:work --delay=1 --sleep=1 --timeout=1800 --tries=3
directory=/var/www/cachet/
redirect\_stderr=true
autostart=true
autorestart=true
user=cachet
```

> **Update to your configuration!**
> Be sure to update the values in the example configuration above to match
> your installation setup.

## Database Queue with Cron

The default installation of Cachet sets the queue type to database which means
that all jobs are stored within your database and is then processed by a cron
job which calls an artisan command from within the project directory.

You'll need to create a new cron job, in Ubuntu it's a case of running
crontab -e and adding this line:

`* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1`

Close the file and the cron job will now begin running, processing any
confirmation and incident emails.

## Synchronous Queue (not recommended for larger installs)

If you cannot add a queue job, another alternative is to process all of
the jobs immediately after they are created.

> **Not suitable for larger installations!**
> This setup is not ideal for larger installs with hundreds of subscribers
> as each email can take a few seconds to send and would slow down your
> interaction with the system.

To set this up change the .env file with the following setting:

`QUEUE_DRIVER=sync`
