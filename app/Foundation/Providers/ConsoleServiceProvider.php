<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Providers;

use Illuminate\Console\Command;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;

/**
 * This is the console service provider.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen('command.extrastuff', 'CachetHQ\\Cachet\\Foundation\\Providers\\ConsoleServiceProvider@foo');
    }

    public function foo(Command $command)
    {
        die('HELLO');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
