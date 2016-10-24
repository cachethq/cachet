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
 * This is the plugin class.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class Plugin
{
    /**
     * The plugin's vendor name.
     *
     * @var string
     */
    protected $vendor;

    /**
     * The plugin's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The plugin's authors.
     *
     * @var \CachetHQ\Cachet\Services\Plugins\Definition\Author[]
     */
    protected $authors;

    /**
     * The plugin's version.
     *
     * @var \CachetHQ\Cachet\Services\Plugins\Definition\Version
     */
    protected $version;

    /**
     * The plugin's dependencies.
     *
     * @var \CachetHQ\Cachet\Services\Plugins\Definition\Dependency[]
     */
    protected $dependencies;

    /**
     * The plugin's state.
     *
     * @var bool
     */
    protected $enabled;

    /**
     * Create a new plugin object.
     *
     * @param string                                                    $vendor
     * @param string                                                    $name
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Author[]     $authors
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Version      $version
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Dependency[] $dependencies
     * @param bool                                                      $enabled
     */
    public function __construct($vendor, $name, $authors, $version, $dependencies, $enabled) {
        $this->vendor = $vendor;
        $this->name = $name;
        $this->authors = $authors;
        $this->version = $version;
        $this->dependencies = $dependencies;
        $this->enabled = $enabled;
    }

    /**
     * Set if the plugin is enabled.
     *
     * @param bool $enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get if the plugin is enabled.
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * Get if the plugin is disabled.
     *
     * @return bool
     */
    public function isDisabled()
    {
        return !$this->enabled;
    }
}
