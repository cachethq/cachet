<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->view->composer('*', 'CachetHQ\Cachet\Composers\LoggedUserComposer');
        $this->app->view->composer('index', 'CachetHQ\Cachet\Composers\IndexComposer');
        $this->app->view->composer('index', 'CachetHQ\Cachet\Composers\ThemeComposer');
        $this->app->view->composer('dashboard.*', 'CachetHQ\Cachet\Composers\DashboardComposer');
        $this->app->view->composer([
            'setup',
            'dashboard.settings.app-setup',
        ], 'CachetHQ\Cachet\Composers\TimezoneLocaleComposer');
    }
}
