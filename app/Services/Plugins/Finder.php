<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Plugins;

use CachetHQ\Cachet\Services\Plugins\Contracts\Finder as FinderContract;
use Illuminate\Contracts\Filesystem\Filesystem;

/**
 * This is the plugin finder.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class Finder implements FinderContract
{
    /**
     * The filesystem.
     *
     * @var \Illuminate\Contracts\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Create a new finder object.
     *
     * @param \Illuminate\Contracts\Filesystem\Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        $this->files = $files;
    }

    /**
     * Retrieve all available plugins.
     *
     * @return string[]
     */
    public function retrieve()
    {
        $vendors = $this->files->directories();

        $plugins = array_reduce($vendors, [$this, 'reduceVendor'], []);
        $plugins = array_filter($plugins, [$this, 'filterPlugin']);

        return $plugins;
    }

    /**
     * Reduce vendor directories to plugin directories.
     *
     * @param string[] $reduced
     * @param string   $vendor
     *
     * @return string[]
     */
    protected function reduceVendor($reduced, $vendor)
    {
        $plugins = $this->files->directories($vendor);

        return array_merge($reduced, $plugins);
    }

    /**
     * Filter plugin directories to possibly valid plugins.
     *
     * @param string $plugin
     *
     * @return bool
     */
    protected function filterPlugin($plugin)
    {
        return $this->files->exists("{$plugin}/plugin.yml");
    }
}
