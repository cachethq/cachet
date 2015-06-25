# Cachet

[![StyleCI](https://styleci.io/repos/26730195/shield)](https://styleci.io/repos/26730195/)
[![Build Status](https://img.shields.io/travis/cachethq/Cachet.svg?style=flat-square)](https://travis-ci.org/cachethq/Cachet)
[![Quality Score](https://img.shields.io/scrutinizer/g/cachethq/Cachet.svg?style=flat-square)](https://scrutinizer-ci.com/g/cachethq/Cachet)
[![Software License](https://img.shields.io/badge/license-BSD3-brightgreen.svg?style=flat-square)](LICENSE)
[![Crowdin](https://d322cqt584bo4o.cloudfront.net/cachet/localized.png)](http://translate.cachethq.io/project/cachet)

![Screenshot](https://cachethq.io/img/main-interface.jpg)

## Features

- List your services components
- Log incidents
- Apply custom CSS to the status page
- Markdown support for incident messages
- JSON API
- Translated into eleven languages
- Metrics
- Cross-database support: MySQL, PostgreSQL and SQLite
- Subscriber notifications via Email
- Two factor authentication, with Google Authenticator

## Requirements

- PHP 5.5.9+ or newer
- [Composer](https://getcomposer.org)

### Development Requirements

The following extra dependencies are required to develop Cachet:

- Node.js
- Bower
- Gulp

## Installation, Upgrades and Documentation

You can now find our documentation at [https://docs.cachethq.io](https://docs.cachethq.io).

### Demo Account

To test out the demo, you may login to the [Dashboard](https://demo.cachethq.io/dashboard) with the following:

- **Username:** test@test.com
- **Password:** test123

The demo is reset every half hour.

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

### docker-compose

Quickly launch Cachet and MySQL docker images with [docker-compose](https://docs.docker.com/compose/)

```bash
git clone https://github.com/cachethq/Cachet.git
cd Cachet
docker-compose build
docker-compose up
```

To initialize the database, utilize [docker exec](https://docs.docker.com/reference/commandline/cli/#exec):
```bash
docker exec -it cachet_cachet_1 php artisan migrate --force
```

Continue to `http://<ipdockerisboundto>/setup` to configure Cachet.

## Addons

- [cachet-monitor](https://github.com/castawaylabs/cachet-monitor) - For URL monitoring. Automatic incident updates.
- [sensu-cachet](https://github.com/bimlendu/sensu-cachethq) - Sensu handler for updating CachetHQ.

## Read more about Cachet

For more information on why I started developing Cachet, check out my [Cachet articles on my blog](https://james-brooks.uk/tag/cachet/?utm_source=github&utm_medium=readme&utm_campaign=github-cachet).

## Translations

A special thank you to our [translators](https://crowdin.com/project/cachet/activity_stream), who have allowed us to share Cachet with the world. If you'd like to contribute translations, please check out our [CrowdIn project](https://crowdin.com/project/cachet).
