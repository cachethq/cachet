# Cachet

[![StyleCI](https://styleci.io/repos/26730195/shield)](https://styleci.io/repos/26730195/)
[![Build Status](https://img.shields.io/travis/cachethq/Cachet.svg?style=flat-square)](https://travis-ci.org/cachethq/Cachet)
[![Quality Score](https://img.shields.io/scrutinizer/g/cachethq/Cachet.svg?style=flat-square)](https://scrutinizer-ci.com/g/cachethq/Cachet)
[![Software License](https://img.shields.io/badge/license-BSD3-brightgreen.svg?style=flat-square)](LICENSE)
[![Gitter](https://img.shields.io/badge/gitter-join%20chat-brightgreen.svg?style=flat-square)](https://gitter.im/cachethq/Cachet?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)

![Screenshot](https://cachethq.io/img/main-interface.jpg)

**Currently in development. Things may change or break until a solid release has been announced.**

## Features

- List your services components.
- Log incidents.
- Apply a custom stylesheet to the status page.
- Markdown support for incident messages.
- RESTful API.
- Translated into several languages.
- Metrics.
- Cross-database support: MySQL, PostgreSQL and SQLite.

## Requirements

- PHP 5.5.9+ or newer
- [Composer](https://getcomposer.org)

### Development Requirements

The following extra dependencies are required to develop Cachet.

- Node.js
    + Bower
    + Gulp

## Installation, Upgrades and Documentation

You can now find our documentation at [https://docs.cachethq.io](https://docs.cachethq.io) or, directly at [http://cachet.readme.io](http://cachet.readme.io) if the first link fails to load. [Cachet Demo](https://demo.cachethq.io).

If you're upgrading from an earlier version of Cachet, which uses Laravel 4 then you'll need to follow the upgrade instructions [found here](https://docs.cachethq.io/v1.0/docs/upgrading-from-laravel-4).

### Demo Account

To test out the demo, you may login to the [Dashboard](https://demo.cachethq.io/dashboard) with the following:

- **Username:** test@test.com
- **Password:** test123

The demo is reset every half past the hour.

## What Cachet is not

Here is a list of things that Cachet is not or does not do:

1. It does not monitor your services. It works only as a way to display the status of your services. *However, Cachet is able to receive updates from third-party services via its API.*
2. It does not work on a plugin system. There are no monitoring services to extend.
3. It's not a Twitter clone.

## Quickstart with Docker

Run a DB container (you can either pass in environment variables for the DB, or mount a config with `-v /my/database.php:/var/www/html/app/config/database.php`):

```bash
$ export DB_USERNAME=cachet
$ export DB_PASSWORD=cachet
$ export DB_ROOT_PASSWORD=cachet
$ export DB_DATABASE=cachet
$ docker run --name mysql -e MYSQL_USER=$DB_USERNAME -e MYSQL_PASSWORD=$DB_PASSWORD  -e MYSQL_ROOT_PASSWORD=$DB_ROOT_PASSWORD -e MYSQL_DATABASE=$DB_DATABASE -d mysql
```

Initialize the DB if you haven't yet:

```bash
$ docker run --rm --link mysql:mysql -e DB_HOST=mysql -e DB_DATABASE=$DB_DATABASE -e DB_USERNAME=$DB_USERNAME -e DB_PASSWORD=$DB_PASSWORD cachethq/cachet:latest php artisan migrate --force
```

Run Cachet:

```bash
$ docker run -d --name cachet --link mysql:mysql -p 80:8000 -e DB_HOST=mysql -e DB_DATABASE=$DB_DATABASE -e DB_USERNAME=$DB_USERNAME -e DB_PASSWORD=$DB_PASSWORD cachethq/cachet:latest
```

Now go to `http://<ipdockerisboundto>/setup` and have fun!

Note: When running in production you should ensure that you enable SSL.
This is commonly achieved by running Nginx with your certificates on your Docker host, service or load balancers in-front of the running container, or by adding your custom SSL certificates and configuration to the supplied Nginx configuration.

## Addons

- [cachet-monitor](https://github.com/castawaylabs/cachet-monitor) - For URL monitoring. Automatic incident updates.
- [sensu-cachet](https://github.com/bimlendu/sensu-cachethq) - Sensu handler for updating CachetHQ.

## Read more about Cachet

For more information on why I started developing Cachet, check out my [Cachet articles on my blog](https://james-brooks.uk/tag/cachet/?utm_source=github&utm_medium=readme&utm_campaign=github-cachet).

## Translations

A special thank you to our [translators](https://crowdin.com/project/cachet/activity_stream), who have allowed us to share Cachet with the world. If you'd like to contribute translations, please check out our [CrowdIn project](https://crowdin.com/project/cachet).
