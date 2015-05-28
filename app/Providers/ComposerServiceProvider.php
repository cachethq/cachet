<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Providers;

use CachetHQ\Cachet\Composers\DashboardComposer;
use CachetHQ\Cachet\Composers\IndexComposer;
use CachetHQ\Cachet\Composers\LoggedUserComposer;
use CachetHQ\Cachet\Composers\ThemeComposer;
use CachetHQ\Cachet\Composers\TimezoneLocaleComposer;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->view->composer('*', LoggedUserComposer::class);
        $this->app->view->composer('index', IndexComposer::class);
        $this->app->view->composer('index', ThemeComposer::class);
        $this->app->view->composer('dashboard.*', DashboardComposer::class);
        $this->app->view->composer(['setup', 'dashboard.settings.app-setup'], TimezoneLocaleComposer::class);
    }
}
