<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\Plugin;

use CachetHQ\Cachet\Bus\Commands\Plugin\UninstallPluginCommand;
use CachetHQ\Cachet\Bus\Events\Plugin\PluginWasUninstalledEvent;
use CachetHQ\Cachet\Bus\Events\Plugin\PluginWillBeUninstalledEvent;
use CachetHQ\Cachet\Models\Plugin;
use Illuminate\Contracts\Filesystem\Factory as FilesystemManager;

class UninstallPluginCommandHandler
{
    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Contracts\Filesystem\Filesystem
     */
    protected $filesystem;

    /**
     * Create a new uninstall plugin command handler instance.
     *
     * @param \Illuminate\Contracts\Filesystem\Factory $manager
     *
     * @return void
     */
    public function __construct(FilesystemManager $manager)
    {
        $this->filesystem = $manager->disk('plugins');
    }

    /**
     * Handle the uninstall plugin command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Plugin\UninstallPluginCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Plugin
     */
    public function handle(UninstallPluginCommand $command)
    {
        event(new PluginWillBeUninstalledEvent($command->plugin));

        $this->filesystem->deleteDirectory("disabled/{$command->plugin->name}");

        $command->plugin->delete();

        event(new PluginWasUninstalledEvent($command->plugin));
    }
}
