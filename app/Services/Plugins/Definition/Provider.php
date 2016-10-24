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
 * This is the plugin provider class.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class Provider
{
    /**
     * The plugin's provider class.
     *
     * @var string
     */
    protected $class;

    /**
     * Create a new provider object.
     *
     * @param string $class
     */
    public function __construct($name)
    {
        $this->class = $class;
    }

    /**
     * Get the provider's class.
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
}
