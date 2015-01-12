<?php

namespace CachetHQ\Cachet\Providers;

use CachetHQ\Cachet\Http\Auth\ApiTokenAuthenticator;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('CachetHQ\Cachet\Http\Auth\ApiTokenAuthenticator', function () {
            return new ApiTokenAuthenticator();
        });
    }
}
