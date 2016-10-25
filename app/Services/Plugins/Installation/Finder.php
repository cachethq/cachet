<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Plugins\Installation;

use CachetHQ\Cachet\Services\Plugins\Contracts\Installation\Finder as FinderContract;
use CachetHQ\Cachet\Services\Plugins\Definition\Plugin;
use Illuminate\Contracts\Filesystem\Filesystem;

/**
 * This is the plugin installation finder.
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
     * Retrieve a specific plugin archive.
     *
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Plugin $plugin
     *
     * @return string
     */
    public function retrieve(Plugin $plugin)
    {
        $file = sprintf(
            'plugins/%s.%s.%s.tar.gz',
            $plugin->getVendor(),
            $plugin->getName(),
            $plugin->getVersion()
        );

        if (!$this->files->exists($file)) {
            return;
        }

        return storage_path("temp/{$file}");
    }
}
