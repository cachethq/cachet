<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Foundation\Providers;

use App\Composers\AppComposer;
use App\Composers\ComponentsComposer;
use App\Composers\CurrentUserComposer;
use App\Composers\DashboardComposer;
use App\Composers\MetricsComposer;
use App\Composers\ScheduledComposer;
use App\Composers\SettingsComposer;
use App\Composers\StatusComposer;
use App\Composers\StickiedComposer;
use App\Composers\ThemeComposer;
use App\Composers\TimelineComposer;
use App\Composers\TimezoneLocaleComposer;
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
        $factory->composer(['index', 'single-incident', 'subscribe.*', 'signup', 'dashboard.settings.theme', 'notifications::email', 'single-schedule', 'errors.*'], ThemeComposer::class);
        $factory->composer('dashboard.*', DashboardComposer::class);
        $factory->composer(['setup.*', 'dashboard.settings.localization'], TimezoneLocaleComposer::class);

        $factory->composer('partials.modules.components', ComponentsComposer::class);
        $factory->composer('partials.modules.metrics', MetricsComposer::class);
        $factory->composer('partials.modules.stickied', StickiedComposer::class);
        $factory->composer('partials.modules.scheduled', ScheduledComposer::class);
        $factory->composer('partials.modules.status', StatusComposer::class);
        $factory->composer('partials.modules.timeline', TimelineComposer::class);
        $factory->composer(['dashboard.settings.mail', 'setup.*'], SettingsComposer::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DashboardComposer::class);
    }
}
