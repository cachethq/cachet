<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Providers;

use CachetHQ\Cachet\Composers\AppComposer;
use CachetHQ\Cachet\Composers\CurrentUserComposer;
use CachetHQ\Cachet\Composers\DashboardComposer;
use CachetHQ\Cachet\Composers\MetricsComposer;
use CachetHQ\Cachet\Composers\StatusPageComposer;
use CachetHQ\Cachet\Composers\ThemeComposer;
use CachetHQ\Cachet\Composers\TimezoneLocaleComposer;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @param \Illuminate\Contracts\View\Factory $factory
     */
    public function boot(Factory $factory)
    {
        $factory->composer('*', AppComposer::class);
        $factory->composer('*', CurrentUserComposer::class);
        $factory->composer(['index'], MetricsComposer::class);
        $factory->composer(['index', 'incident', 'subscribe'], StatusPageComposer::class);
        $factory->composer(['index', 'incident', 'subscribe', 'dashboard.settings.theme'], ThemeComposer::class);
        $factory->composer('dashboard.*', DashboardComposer::class);
        $factory->composer(['setup', 'dashboard.settings.localization'], TimezoneLocaleComposer::class);
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
