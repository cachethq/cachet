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

use CachetHQ\Cachet\GitHub\Release;
use Illuminate\Support\ServiceProvider;

class GitHubServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRelease();
    }

    /**
     * Register the releases class.
     *
     * @return void
     */
    protected function registerRelease()
    {
        $this->app->singleton('cachet.release', function ($app) {
            $cache = $app['cache.store'];
            $config = $app['config'];

            return new Release($cache, $config);
        });

        $this->app->alias('cachet.release', Release::class);
    }
}
