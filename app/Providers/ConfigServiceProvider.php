<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Overwrite any vendor / package configuration.
     *
     * This service provider is intended to provide a convenient location for you
     * to overwrite any "vendor" or package configuration that you may want to
     * modify before the application handles the incoming request / command.
     */
    public function register()
    {
        config([
            //
        ]);
    }
}
