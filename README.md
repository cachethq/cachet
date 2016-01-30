# Cachet

[![StyleCI](https://styleci.io/repos/26730195/shield)](https://styleci.io/repos/26730195/)
[![Build Status](https://img.shields.io/travis/CachetHQ/Cachet.svg?style=flat-square)](https://travis-ci.org/CachetHQ/Cachet)
[![Quality Score](https://img.shields.io/scrutinizer/g/CachetHQ/Cachet.svg?style=flat-square)](https://scrutinizer-ci.com/g/CachetHQ/Cachet)
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

## Usage in production

The `master` branch of this repository is a development branch and **should not** be used in production. Instead, please check out the latest tag release.

## Requirements

- PHP 5.5.9+ or newer
- [Composer](https://getcomposer.org)

### Development Requirements

These extra dependencies are required to develop Cachet:

- Node.js
- Bower
- Gulp

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

## Translations

A special thank you to our [translators](https://crowdin.com/project/cachet/activity_stream), who have allowed us to share Cachet with the world. If you'd like to contribute translations, please check out our [CrowdIn project](https://crowdin.com/project/cachet).

## Security Vulnerabilities

If you discover a security vulnerability within Cachet, please send an e-mail to us at support@alt-three.com. All security vulnerabilities will be promptly addressed.
