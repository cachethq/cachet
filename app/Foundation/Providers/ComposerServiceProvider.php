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
use CachetHQ\Cachet\Composers\MetricsComposer;
use CachetHQ\Cachet\Composers\StatusPageComposer;
use CachetHQ\Cachet\Composers\ThemeComposer;
use CachetHQ\Cachet\Composers\TimezoneLocaleComposer;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * The view composers.
     *
     * @var array
     */
    protected $composers = [
        AppComposer::class            => '*',
        CurrentUserComposer::class    => '*',
        MetricsComposer::class        => ['index'],
        StatusPageComposer::class     => ['index', 'single-incident', 'subscribe', 'signup'],
        ThemeComposer::class          => ['index', 'single-incident', 'subscribe.*', 'signup', 'dashboard.settings.theme', 'emails.*'],
        DashboardComposer::class      => 'dashboard.*',
        TimezoneLocaleComposer::class => ['setup', 'dashboard.settings.localization'],

    ];

    /**
     * Boot the service provider.
     *
     * @param \Illuminate\Contracts\View\Factory $factory
     */
    public function boot(Factory $factory)
    {
        foreach ($this->composers as $composer => $views) {
            $factory->composer($views, $composer);
        }
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
