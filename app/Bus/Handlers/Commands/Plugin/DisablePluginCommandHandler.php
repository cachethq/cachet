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

use CachetHQ\Cachet\Bus\Commands\Plugin\DisablePluginCommand;
use CachetHQ\Cachet\Bus\Events\Plugin\PluginWillBeDisabledEvent;
use CachetHQ\Cachet\Bus\Events\Plugin\PluginWasDisabledEvent;
use CachetHQ\Cachet\Integrations\Contracts\Plugins;
use CachetHQ\Cachet\Models\Plugin;

class DisablePluginCommandHandler
{
    /**
     * The plugins instance.
     *
     * @var \CachetHQ\Cachet\Integrations\Contracts\Plugins
     */
    protected $plugins;

    /**
     * Create a new disable plugin command handler instance.
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
     * Handle the disable plugin command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Plugin\DisablePluginCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Plugin
     */
    public function handle(DisablePluginCommand $command)
    {
        event(new PluginWillBeDisabledEvent($command->plugin));

        $this->plugins->disable($command->plugin);

        event(new PluginWasDisabledEvent($command->plugin));
    }
}
