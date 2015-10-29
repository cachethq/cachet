# Contribution Guidelines

## Creating issues

Feature requests and bug reports should be made by using the [issue tracker](https://github.com/cachethq/Cachet/issues). Support questions should be directed to our support email; [support@alt-three.com](mailto:support@alt-three.com?subject=Cachet Support).

**Always be respectful.** Organization members reserve the right to lock topics if they feel necessary.

## Languages

When needing to add labels, placeholders or general text, you **must not** write directly into the source file, rather make use of the `./resources/lang/` directory.

Always provide the English translation and copy your English string to all other languages - making sure that the indentation and alignment of the arrays are updated.

## Coding Standards

Please follow existing coding standards:

```php
<?php

namespace CachetHQ\Cachet\Controller;

use CachetHQ\Cachet\Bar;

class Foo extends Bar
{
    public function baz()
    {
        if ($condition) {
        }
    }
}

```

- At least one newline separating `namespace`, `use`, `function` and `class` declarations.
- Spaces around operators, loops, conditions and control blocks:
    ```php
    <?php
    use \Exception;

    if ($condition === (10 + 2)) {
        try {
            throw Exception("Something went wrong...");
        } catch (Exception $e) {
            // Do something here.
        }
    }
    ```
- Braces on a new line following: `namespace`, `use`, `function` and `class`.
- PHP constants should be in lowercase; `true`, `false` and `null`.
- Defined constants should always be in uppercase.
- Never leave trailing spaces at the end of a line.
- Files should end with one blank line.
- Do not use `# Bash` style comments.
- Always add or update Docblocs to functions.
- We use [StyleCI](https://styleci.io) to automatically check code standards in Pull Requests. If your PR fails the CI check, then apply the supplied patch and re-push.

If you're still unsure, then take a look at existing code.

## Introduction into Git and GitHub

If you are new to Git, GitHub and the whole open source software community, welcome! Here are some resources for getting started and understanding what it's all about.

- [Try Git](https://try.github.io/levels/1/challenges/1) by Code School
- [GitHub Help](https://help.github.com)

If you're not particularly fond of the command line, you can get one of GitHub's free GUI desktop apps:

- [GitHub for Mac](https://github.com/blog/1510-installing-git-from-github-for-mac)
- [GitHub for Windows](https://github.com/blog/1127-github-for-windows)

If you're feeling adventurous, you can become a Git & GitHub master with the [Git Path on Code School](https://www.codeschool.com/paths/git).

## .editorconfig

You should also make use of the [.editorconfig](/.editorconfig) file found within the root of the repository. It'll make sure that your editor is setup with the same file settings.
