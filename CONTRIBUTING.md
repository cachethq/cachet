# Contribution Guidelines

## Creating issues

It's dead simple, use the issue tracker. Be descriptive, remember this is a community and we're all helping each other, so be respectful towards each other.

## Coding Standards

Please follow existing coding standards:

```php
<?php

namespace Foo\Bar\Controller;

use Foo\Bar\Bar;

class Foo extends Bar {
    public function baz() {
        if ($condition) {
        }
    }
}

```

- At least one newline seperating `namespace`, `use`, and `class` declarations
- Spaces around operators and control blocks:
    ```php
    if ($condition) {

    }
    ```
- Braces on the same line. The exception to this rule is for long conditions.
- Line lengths have a soft 80 limit and hard 120 length.
- PHP constants should be in lowercase; `true`, `false` and `null`.
- Defined constants should always be in uppercase.
- Never leave trailing spaces at the end of a line.
- Files should end with one blank line.

If you're still unsure, then take a look at existing code.

## Intro to Git and GitHub

If you are new to git, GitHub, and the whole open source software community, welcome! Here are some resources for getting started and understanding what it's all about.

- [Try Git](https://try.github.io/levels/1/challenges/1) by Code School
- [GitHub Help](https://help.github.com)

If you're not particularly fond of the command line, you can get one of GitHub's free GUI desktop apps:

- [GitHub for Mac](https://github.com/blog/1510-installing-git-from-github-for-mac)
- [GitHub for Windows](https://github.com/blog/1127-github-for-windows)

If you're feeling advantageous, you can become a Git & GitHub master with the [Git Path on Code School](https://www.codeschool.com/paths/git).

There is always the Cachet Gitter chat to ask any questions you may have: 

[![Gitter](https://badges.gitter.im/Join Chat.svg)](https://gitter.im/cachethq/Cachet?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)
