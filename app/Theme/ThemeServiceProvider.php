<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Theme;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

/**
 * This is the theme service provider class.
 *
 * @author James Brooks <james@bluebaytravel.co.uk>
 */
class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(resource_path('views/vendor/theme'), 'theme');

        $themeWasCalled = app(ThemeWasCalled::class);

        event($themeWasCalled);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ThemeManager::class, function (Container $app) {
            return new ThemeManager($app);
        });
    }
}
