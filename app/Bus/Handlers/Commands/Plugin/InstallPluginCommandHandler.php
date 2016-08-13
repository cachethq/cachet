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

use CachetHQ\Cachet\Bus\Commands\Plugin\InstallPluginCommand;
use CachetHQ\Cachet\Bus\Events\Plugin\PluginWasInstalledEvent;
use CachetHQ\Cachet\Bus\Events\Plugin\PluginWillBeInstalledEvent;
use CachetHQ\Cachet\Integrations\Contracts\Packages;
use CachetHQ\Cachet\Models\Plugin;

class InstallPluginCommandHandler
{
    /**
     * The packages instance.
     *
     * @var \CachetHQ\Cachet\Integrations\Contracts\Packages
     */
    protected $packages;

    /**
     * Create a new install plugin command handler instance.
     *
     * @param \CachetHQ\Cachet\Integrations\Contracts\Packages $packages
     *
     * @return void
     */
    public function __construct(Packages $packages)
    {
        $this->packages = $packages;
    }

    /**
     * Handle the install plugin command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Plugin\InstallPluginCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Plugin
     */
    public function handle(InstallPluginCommand $command)
    {
        $search = $this->filter($command);

        $package = $this->packages->find(
            $search['vendor'],
            $search['package'],
            $search['version']
        );

        event(new PluginWillBeInstalledEvent($package['name']));

        $this->packages->download($package);

        $plugin = Plugin::create($this->map($package));

        event(new PluginWasInstalledEvent($plugin));

        return $plugin;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Incident\InstallPluginCommand $command
     *
     * @return array
     */
    protected function filter(InstallPluginCommand $command)
    {
        $params = [
            'vendor'  => $command->vendor,
            'package' => $command->package,
            'version' => $command->version,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }

    /**
     * Map a package to plugin attributes.
     *
     * @param array $package
     *
     * @return array
     */
    protected function map(array $package)
    {
        return [
            'name'        => $package['name'],
            'description' => $package['description'],
            'version'     => $package['version'],
            'link'        => $package['link'],
        ];
    }
}
