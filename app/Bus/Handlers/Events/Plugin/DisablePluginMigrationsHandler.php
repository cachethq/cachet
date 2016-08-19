<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Events\Plugin;

use CachetHQ\Cachet\Bus\Events\Plugin\PluginWasDisabledEvent;
use Illuminate\Database\Migrations\Migrator;

class DisablePluginMigrationsHandler
{
    /**
     * The migrator instance.
     *
     * @var \Illuminate\Database\Migrations\Migrator
     */
    protected $migrator;

    /**
     * Create a new disable plugin migrations handler.
     *
     * @param \Illuminate\Database\Migrations\Migrator $migrator
     *
     * @return void
     */
    public function __construct(Migrator $migrator)
    {
        $this->migrator = $migrator;
    }

    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\Plugin\PluginWasDisabledEvent $event
     *
     * @return void
     */
    public function handle(PluginWasDisabledEvent $event)
    {
        $directory = plugin_path(false, $event->plugin->name, 'migrations');
        if (!file_exists($directory)) {
            return;
        }

        $migrations = $this->migrator->getMigrationFiles($directory);

        $this->migrator->requireFiles($directory, $migrations);

        foreach ($migrations as $migration) {
            $instance = $this->migrator->resolve($migration);

            $instance->down();
        }
    }
}
