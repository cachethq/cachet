<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Plugins\Definition;

/**
 * This is the plugin author class.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class Author
{
    /**
     * The author's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The author's email.
     *
     * @var string
     */
    protected $email;

    /**
     * Create a new author object.
     *
     * @param string $name
     * @param string $email
     */
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Get the author's name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the author's email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the author as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            '%s <%s>',
            $this->name,
            $this->email
        );
    }
}
