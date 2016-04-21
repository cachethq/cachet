# Cachet

[![StyleCI](https://styleci.io/repos/26730195/shield)](https://styleci.io/repos/26730195/)
[![Build Status](https://img.shields.io/travis/CachetHQ/Cachet.svg?style=flat-square)](https://travis-ci.org/CachetHQ/Cachet)
[![Quality Score](https://img.shields.io/scrutinizer/g/CachetHQ/Cachet.svg?style=flat-square)](https://scrutinizer-ci.com/g/CachetHQ/Cachet)
[![Software License](https://img.shields.io/badge/license-BSD3-brightgreen.svg?style=flat-square)](LICENSE)
[![Crowdin](https://d322cqt584bo4o.cloudfront.net/cachet/localized.png)](http://translate.cachethq.io/project/cachet)
[![Packagist](https://img.shields.io/packagist/v/cachethq/cachet.svg?style=flat-square)](https://packagist.org/packages/cachethq/cachet)

![Screenshot](https://cachethq.io/img/main-interface.jpg)

Cachet is a beautiful and powerful open source status page system, a free replacement to services such as StatusPage.io, Status.io and others.

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

## Usage in production

The `master` branch of this repository is a development branch and **should not** be used in production. Instead, please check out the latest tag release.

## Requirements

- PHP 5.5.9+ or newer
- Apache or Nginx server
- [Composer](https://getcomposer.org)

## How to contribute

We're always looking for contributions that improve Cachet. It's easy to get started and you don't even need to know how to write a single line of code!

### Contributing as a non-developer/non-designer

If you're one of the more linguistically talented people in the world who can speak and write more than just English, we're always looking for new [translations](#translations).

Of course bug reports, feature requests and [documentation](https://docs.cachethq.io) are always being sought after.

### Contributing as a designer

As Cachet gains new features, the design and ideas that were once a perfect fit need updating and in some cases designing from scratch. This is where you come in! Fancy giving Cachet a lick of paint? Sweet!

You'll need to install Node.js, Bower and Gulp.

To get started you can do the following:

1. Install Node.js, Bower and Gulp.
2. Install the assets; `bower install`
3. Modify the SCSS files in `./resources/assets/sass/`
4. Run `gulp`

If you're making a lot of changes, you'll find that running `gulp watch` will really help you out!

### Contributing as a developer

Built using [Laravel](https://laravel.com), Cachet is very easy to jump into. Have a look around you'll find it surprisingly easy!

These extra dependencies are required to develop Cachet:

- Node.js
- Bower
- Gulp
- Git

Once cloned to your local machine, you'll need some demo data! Simply run `php artisan cachet:seed` to get the demo installation on the go.

## Installation, Upgrades and Documentation

You can now find our documentation at [https://docs.cachethq.io](https://docs.cachethq.io).

- [Installing Cachet](https://docs.cachethq.io/docs/installing-cachet)
- [Getting started with Docker](https://docs.cachethq.io/docs/get-started-with-docker)
- [Getting started with Vagrant](https://docs.cachethq.io/docs/get-started-with-vagrant)

### Demo Account

To test out the demo, you may login to the [Dashboard](https://demo.cachethq.io/dashboard) with the following:

- **Username:** test or test@test.com
- **Password:** test123

The demo is reset every half hour.

### Release Notes

All releases are listed on the [Releases page](https://github.com/CachetHQ/Cachet/releases) of the [Cachet GitHub repository](https://github.com/CachetHQ/Cachet). On the Releases page, you can also find the release notes for each release.

## Translations

A special thank you to our [translators](https://crowdin.com/project/cachet/activity_stream), who have allowed us to share Cachet with the world. If you'd like to contribute translations, please check out our [CrowdIn project](https://crowdin.com/project/cachet).

## Security Vulnerabilities

If you discover a security vulnerability within Cachet, please send an e-mail to us at support@alt-three.com. All security vulnerabilities will be promptly addressed.

## Installations

We offer a paid installation service, which starts at $99 but is subject to change, dependant on your setup and infrastructure.

To find out more, email us at support@alt-three.com

## Donations

Cachet is open source, we don't have any licensing models and don't run ads on the [website](https://cachethq.io).

If you'd like to donate towards further development of Cachet you can do so via Paypal.

[![Donate](https://www.paypalobjects.com/en_GB/i/btn/btn_donate_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=D4M5LVULVPPKL)
