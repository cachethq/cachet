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

use CachetHQ\Cachet\Upgrades\UpgradePathRunner;
use Illuminate\Console\Command;

/**
 * This is the upgrade command.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpgradeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cachet:upgrade';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs any upgrade paths.';

    /**
     * The upgrade path runner instance.
     *
     * @var \CachetHQ\Cachet\Upgrades\UpgradePathRunner
     */
    protected $upgrader;

    /**
     * Create a new command instance.
     *
     * @param \CachetHQ\Cachet\Upgrades\UpgradePathRunner $upgrader
     *
     * @return void
     */
    public function __construct(UpgradePathRunner $upgrader)
    {
        parent::__construct();

        $this->upgrader = $upgrader;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $paths = $this->upgrader->getUpgradePaths();

        foreach ($paths as $path) {
            $this->comment('You can upgrade to '.$path->getVersion().'!');

            if ($this->confirm("Do you wish to continue?\n Not doing so may leave your status page in an unusable state.")) {
                $this->info('Performing upgrade...');

                if ($path->upgrade()) {
                    $this->info('Upgrade successful!');
                } else {
                    $this->error('There was an issue upgrading to '.$path->getVersion().'. Please try again.');

                    return;
                }
            } else {
                $this->error('Upgrade skipped. Cannot complete upgrade process.');

                return;
            }
        }
    }
}
