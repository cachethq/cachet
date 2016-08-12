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
use CachetHQ\Cachet\Integrations\Exceptions\Autoloader\UpdateFailedException;
use CachetHQ\Cachet\Models\Plugin;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Artisan;

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
        $this->movePlugin($plugin, 'disabled', 'enabled');

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
        $this->movePlugin($plugin, 'enabled', 'disabled');

        $plugin->update(['enabled' => false]);
    }

    /**
     * Move a plugin.
     *
     * @param \CachetHQ\Cachet\Models\Plugin $plugin
     * @param string                         $from
     * @param string                         $to
     *
     * @return void
     */
    protected function movePlugin(Plugin $plugin, $from, $to)
    {
        set_time_limit(60 * 15);

        $this->filesystem->move(
            "${from}/{$plugin->name}",
            "${to}/{$plugin->name}"
        );

        $this->clearCaches();

        try {
            $this->autoloader->update();
        } catch (UpdateFailedException $e) {
            $this->filesystem->move(
                "${to}/{$plugin->name}",
                "${from}/{$plugin->name}"
            );

            $this->clearCaches();
            $this->autoloader->update();

            throw new PluginFailedToEnableException();
        }

        set_time_limit(ini_get('max_execution_time'));
    }

    /**
     * Clear the caches.
     *
     * @return void
     */
    protected function clearCaches()
    {
        Artisan::call('config:clear');
        Artisan::call('route:clear');
    }
}
