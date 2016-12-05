# Cachet

[![StyleCI](https://styleci.io/repos/26730195/shield)](https://styleci.io/repos/26730195/)
[![Build Status](https://img.shields.io/travis/CachetHQ/Cachet/2.4.svg?style=flat-square)](https://travis-ci.org/CachetHQ/Cachet)
[![Software License](https://img.shields.io/badge/license-BSD3-brightgreen.svg?style=flat-square)](LICENSE)
[![Crowdin](https://d322cqt584bo4o.cloudfront.net/cachet/localized.svg)](http://translate.cachethq.io/project/cachet)
[![Latest Release](https://img.shields.io/github/release/cachethq/cachet.svg?style=flat-square)](https://github.com/CachetHQ/Cachet/releases)

![Screenshot](https://cachethq.io/img/main-interface.jpg)

Cachet is a beautiful and powerful open source status page system.

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
- Two factor authentication using Google Authenticator

## Requirements

- PHP 5.5.9+ or newer
- HTTP server with PHP support (eg: Apache, Nginx, Caddy)
- [Composer](https://getcomposer.org)

## I'm looking to contribute to this awesome project!

Sweet, we're always looking for contributions that improve Cachet! It's easy to get started and you don't even need to know how to write a single line of code!

### Contributing as a non-developer/non-designer

We're always looking for new [translations](#translations).

Of course bug reports, feature requests and [documentation](https://docs.cachethq.io) are always appreciated.

### Contributing as a designer

As Cachet gains new features, the design and ideas that were once a perfect fit need updating and in some cases designing from scratch. This is where you come in! Fancy giving Cachet a lick of paint? Sweet!

You'll need to install Node.js, Bower and Gulp.

To get started you can do the following:

1. Install Node.js and our dev dependencies.
2. Make your changes to the SCSS files in `./resources/assets/sass/`
3. Run `gulp`

If you're making a lot of changes, you'll find that running `gulp watch` will make life easier for you!

### Contributing as a developer

Built using [Laravel](https://laravel.com).

We use these extra dependencies to develop Cachet:

- Node.js
- Gulp
- Git

Once cloned to your local machine, you'll need some demo data! Run `php artisan cachet:seed` to get the demo installation ready for action.

## Installation, Upgrades and Documentation

Documentation is found at [https://docs.cachethq.io](https://docs.cachethq.io).

Here are some useful quick links:

- [Installing Cachet](https://docs.cachethq.io/docs/installing-cachet)
- [Getting started with Docker](https://docs.cachethq.io/docs/get-started-with-docker)

### Demo Account

To test out the demo, you may login to the [Dashboard](https://demo.cachethq.io/dashboard) with the following:

- **Username:** `test` or `test@test.com`
- **Password:** `test123`

The demo is reset every half hour.

## Running via Docker

Run a DB container:

    export DB_USERNAME=cachet
    export DB_PASSWORD=cachet
    export DB_DATABASE=cachet
    docker run --name mysql -e MYSQL_USER=$DB_USERNAME -e MYSQL_PASSWORD=$DB_PASSWORD -e MYSQL_DATABASE=$DB_DATABASE -d mysql

Initialize the DB if you havent yet:

    docker run --link mysql:mysql -e DB_HOST=mysql -e DB_DATABASE=$DB_DATABASE -e DB_USERNAME=$DB_USERNAME -e DB_PASSWORD=$DB_PASSWORD byxorna/cachet:test php artisan migrate

Run Cachet:

    docker run -d --link mysql:mysql -p 80:80 -e DB_HOST=mysql -e DB_DATABASE=$DB_DATABASE -e DB_USERNAME=$DB_USERNAME -e DB_PASSWORD=$DB_PASSWORD byxorna/cachet:test 

Now go to http://localhost/setup and type things

## Translations

If you'd like to contribute translations, please check out our [CrowdIn project](https://crowdin.com/project/cachet).

> Thank you to our [translators](https://crowdin.com/project/cachet/activity_stream), who have allowed us to share Cachet with the world!

## Show your support

Cachet is a BSD-3-licensed open source project. If you'd like to support future development, check out the [Patreon campaign](https://patreon.com/jbrooksuk).

## Professional Installation Service

We offer a professional installation service. To find out more, email us at [support@alt-three.com](mailto:support@alt-three.com?Cachet Installation)

## Security Vulnerabilities

If you discover a security vulnerability within Cachet, please send an e-mail to us at support@alt-three.com. We handle all security vulnerabilities on a case-by-case basis.
