# Prerequisites

To start using Cachet, you'll need some prerequisites.

## Application Prerequisites

You'll need at least the following installed on your server:

- PHP 7.1.3, you'll also need `ext-gd`, `ext-simplexml`, `ext-xml`, `ext-mbstring` and `ext-tokenizer` installed.
- [Composer][1]
- APCu or Redis for caching.
- A database driver for your DB such as; MySQL, PostgreSQL or SQLite.
- Git

> **SQLite**
> Whilst we support SQLite, we advise not using it for status pages
> with a high amount of traffic.

> **MySQL Timezone Info**
> Ensure your MySQL database has been updated with the correct timezone
> information. This will ensure that metrics are shown
> correctly: [https://dev.mysql.com/doc/refman/5.7/en/time-zone-support.html][2]

## Developer prerequisites

If you are looking to contribute to Cachet, thank you! Your help is really
appreciated! You may need some extra dependencies; depending on what you're looking for.

Our CSS is compiled from SCSS, so to compile this you will need the following:

- Node.js
- NPM or Yarn

[1]: https://getcomposer.org/
[2]: https://dev.mysql.com/doc/refman/5.7/en/time-zone-support.html
