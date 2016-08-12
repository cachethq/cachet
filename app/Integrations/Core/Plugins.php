<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Integrations\Core;

use CachetHQ\Cachet\Integrations\Contracts\Plugins as PluginsContract;
use CachetHQ\Cachet\Integrations\Contracts\Autoloader as AutoloaderContract;
use CachetHQ\Cachet\Models\Plugin;
use Illuminate\Contracts\Filesystem\Filesystem;

class Plugins implements PluginsContract
{
    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Contracts\Filesystem\Filesystem
     */
    protected $filesystem;

    /**
     * The autoloader instance.
     *
     * @var \CachetHQ\Cachet\Integrations\Contracts\Autoloader
     */
    protected $autoloader;

    /**
     * Create a new plugins instance.
     *
     * @param \Illuminate\Contracts\Filesystem\Filesystem        $filesystem
     * @param \CachetHQ\Cachet\Integrations\Contracts\Autoloader $autoloader
     *
     * @return void
     */
    public function __construct(Filesystem $filesystem, AutoloaderContract $autoloader)
    {
        $this->filesystem = $filesystem;
        $this->autoloader = $autoloader;
    }

    /**
     * Enables a plugin.
     *
     * @param \CachetHQ\Cachet\Models\Plugin $plugin
     *
     * @return void
     *
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Plugins\PluginFailedToEnableException
     */
    public function enable(Plugin $plugin)
    {
        $this->filesystem->move("disabled/{$plugin->name}", "enabled/{$plugin->name}");
        $this->autoloader->dump();

        $plugin->update(['enabled' => true]);
    }

    /**
     * Disables a plugin.
     *
     * @param \CachetHQ\Cachet\Models\Plugin $plugin
     *
     * @return void
     *
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Plugins\PluginFailedToDisableException
     */
    public function disable(Plugin $plugin)
    {
        // ...
    }
}
