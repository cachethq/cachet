<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Subscribers;

use Illuminate\Console\Command;
use Illuminate\Contracts\Events\Dispatcher;

/**
 * This is the command subscriber class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CommandSubscriber
{
    /**
     * Registers the listeners for the subscriber.
     *
     * @param \Illuminate\Contracts\Events\Dispatcher $events
     *
     * @return void
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen('command.appinstall', __CLASS__.'@onInstall', 10);
    }

    /**
     * Handle a app.install event.
     *
     * @param \Illuminate\Console\Command $command
     *
     * @return void
     */
    public function onInstall($command)
    {
        $command->line('Generating application key...');
        $command->call('key:generate');
    }
}
