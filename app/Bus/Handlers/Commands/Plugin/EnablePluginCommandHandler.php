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

use CachetHQ\Cachet\Bus\Commands\Plugin\EnablePluginCommand;
use CachetHQ\Cachet\Bus\Events\Plugin\PluginWasEnabledEvent;
use CachetHQ\Cachet\Bus\Events\Plugin\PluginWillBeEnabledEvent;
use CachetHQ\Cachet\Integrations\Contracts\Plugins;
use CachetHQ\Cachet\Models\Plugin;

class EnablePluginCommandHandler
{
    /**
     * The plugins instance.
     *
     * @var \CachetHQ\Cachet\Integrations\Contracts\Plugins
     */
    protected $plugins;

    /**
     * Create a new enable plugin command handler instance.
     *
     * @param \CachetHQ\Cachet\Integrations\Contracts\Plugins $plugins
     *
     * @return void
     */
    public function __construct(Plugins $plugins)
    {
        $this->plugins = $plugins;
    }

    /**
     * Handle the enable plugin command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Plugin\EnablePluginCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Plugin
     */
    public function handle(EnablePluginCommand $command)
    {
        event(new PluginWillBeEnabledEvent($command->plugin));

        $this->plugins->enable($command->plugin);

        event(new PluginWasEnabledEvent($command->plugin));
    }
}
