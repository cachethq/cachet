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

use CachetHQ\Cachet\Composers\AppComposer;
use CachetHQ\Cachet\Composers\CurrentUserComposer;
use CachetHQ\Cachet\Composers\DashboardComposer;
use CachetHQ\Cachet\Composers\ModuleComposer;
use CachetHQ\Cachet\Composers\Modules\ComponentsComposer as ComponentsModuleComposer;
use CachetHQ\Cachet\Composers\Modules\MetricsComposer as MetricsModuleComposer;
use CachetHQ\Cachet\Composers\Modules\ScheduledComposer as ScheduledModuleComposer;
use CachetHQ\Cachet\Composers\Modules\StatusComposer as StatusModuleComposer;
use CachetHQ\Cachet\Composers\Modules\StickiedComposer as StickiedModuleComposer;
use CachetHQ\Cachet\Composers\Modules\TimelineComposer as TimelineModuleComposer;
use CachetHQ\Cachet\Composers\SettingsComposer;
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
        $factory->composer(['index', 'single-incident', 'subscribe.*', 'signup', 'dashboard.settings.theme', 'notifications::email'], ThemeComposer::class);
        $factory->composer('dashboard.*', DashboardComposer::class);
        $factory->composer(['setup.*', 'dashboard.settings.localization'], TimezoneLocaleComposer::class);

        $factory->composer('*', ModuleComposer::class);
        $factory->composer('partials.modules.components', ComponentsModuleComposer::class);
        $factory->composer('partials.modules.metrics', MetricsModuleComposer::class);
        $factory->composer('partials.modules.stickied', StickiedModuleComposer::class);
        $factory->composer('partials.modules.scheduled', ScheduledModuleComposer::class);
        $factory->composer('partials.modules.status', StatusModuleComposer::class);
        $factory->composer('partials.modules.timeline', TimelineModuleComposer::class);
        $factory->composer(['dashboard.settings.mail', 'setup.*'], SettingsComposer::class);
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
