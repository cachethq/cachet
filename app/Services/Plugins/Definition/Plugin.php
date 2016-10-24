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
     * The plugin's providers.
     *
     * @var \CachetHQ\Cachet\Services\Plugins\Definition\Provider[]
     */
    protected $providers;

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
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Provider[]   $providers
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Dependency[] $dependencies
     * @param bool                                                      $enabled
     */
    public function __construct(
        $vendor,
        $name,
        $authors,
        Version $version,
        $providers,
        $dependencies,
        $enabled
    ) {
        $this->vendor = $vendor;
        $this->name = $name;
        $this->authors = $authors;
        $this->version = $version;
        $this->providers = $providers;
        $this->dependencies = $dependencies;
        $this->enabled = $enabled;
    }

    /**
     * Get the plugin's vendor.
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Get the plugin's name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the plugin's authors.
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Author[]
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Get the plugin's version.
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Get the plugin's providers.
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Provider[]
     */
    public function getProviders()
    {
        return $this->providers;
    }

    /**
     * Get the plugin's dependencies.
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Dependency[]
     */
    public function getDependencies()
    {
        return $this->dependencies;
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

    /**
     * Get the plugin as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            '%s/%s v%s',
            $this->vendor,
            $this->name,
            $this->version
        );
    }
}
