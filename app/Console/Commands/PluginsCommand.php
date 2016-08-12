<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Console\Commands;

use CachetHQ\Cachet\Models\Plugin;
use Illuminate\Console\Command;

/**
 * This is the plugins command class.
 *
 * @author Connor S. Parks
 */
class PluginsCommand extends Command
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'cachet:plugins {--enabled : Only display enabled plugins} {--disabled : Only display disabled plugins}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'View the installed plugins.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $plugins = Plugin::orderBy('order')->orderBy('created_at');

        if ($this->option('enabled')) {
            $plugins->enabled();
        } elseif ($this->option('disabled')) {
            $plugins->disabled();
        }

        $plugins = $plugins->get(['name', 'version', 'description', 'enabled']);

        if ($plugins->count() === 0) {
            $this->error('No plugins found.');

            return;
        }

        $this->table(['name', 'version', 'description', 'enabled'], $plugins);
        $this->comment(sprintf('%s plugin(s) found.', number_format($plugins->count())));
    }
}
