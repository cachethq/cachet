# Contribution Guidelines

## Creating issues

It's dead simple, use the issue tracker. Be descriptive, remember this is a community and we're all helping each other, so be respectful.

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

- Atleast one newline seperating `namespace`, `use`, and `class` declarations
- Spaces around operators and control blocks:
    ```php
    if ($condition) {

    }
    ```
- Braces on the same line. The exception to this rule is for long conditions.
- Line lengths have a soft 80 limit and hard 120 length.
- PHP constants should be in lowercase; `true`, `false` and `null`.
- Defined constants should always be in uppercase.
