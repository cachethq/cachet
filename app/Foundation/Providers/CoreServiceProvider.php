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

use CachetHQ\Cachet\Foundation\Subscribers\CommandSubscriber;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

/**
 * This is the core service provider class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CoreServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupListeners();
    }

    /**
     * Regisrer the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommandSubscriber();
    }

    /**
     * Register the command subscriber class.
     *
     * @return void
     */
    protected function registerCommandSubscriber()
    {
        $this->app->singleton(CommandSubscriber::class, function () {
            return new CommandSubscriber();
        });
    }

    /**
     * Setup the listeners.
     *
     * @return void
     */
    protected function setupListeners()
    {
        $subscriber = $this->app->make(CommandSubscriber::class);

        $this->app->events->subscribe($subscriber);
    }
}
