<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Subscribers;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Events\Dispatcher;

/**
 * This is the command subscriber class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CommandSubscriber
{
    /**
     * The config repository.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Create a new command subscriber instance.
     *
     * @param \Illuminate\Contracts\Config\Repository $config
     *
     * @return void
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Contracts\Events\Dispatcher $events
     *
     * @return void
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen('command.installing', __CLASS__.'@onInstalling', 5);
        $events->listen('command.updating', __CLASS__.'@onUpdating', 5);
        $events->listen('command.resetting', __CLASS__.'@onResetting', 5);
    }

    /**
     * Handle a command.installing event.
     *
     * @param \Illuminate\Console\Command $command
     *
     * @return void
     */
    public function onInstalling(Command $command)
    {
        $this->backupDatabases($command);
    }

    /**
     * Handle a command.updating event.
     *
     * @param \Illuminate\Console\Command $command
     *
     * @return void
     */
    public function onUpdating(Command $command)
    {
        $this->backupDatabases($command);
    }

    /**
     * Handle a command.resetting event.
     *
     * @param \Illuminate\Console\Command $command
     *
     * @return void
     */
    public function onResetting(Command $command)
    {
        $this->backupDatabases($command);
    }

    /**
     * Backup the databases.
     *
     * @param \Illuminate\Console\Command $command
     *
     * @return void
     */
    protected function backupDatabases(Command $command)
    {
        $command->line('Backing up database...');

        $date = Carbon::now()->format('Y-m-d H.i.s');

        $command->call('db:backup', [
            '--database'        => $this->config->get('database.default'),
            '--destination'     => 'local',
            '--destinationPath' => $date,
            '--compression'     => 'gzip',
        ]);

        $command->line('Backup completed...');
    }
}
