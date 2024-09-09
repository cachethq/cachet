<?php

namespace CachetHQ\Cachet\Providers;

use Illuminate\Support\ServiceProvider;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;

class CommonMarkServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(CommonMarkConverter::class, function ($app) {
            $environment = new Environment();
            $environment->addExtension(new CommonMarkCoreExtension());

            return new CommonMarkConverter([], $environment);
        });
    }

    public function boot()
    {
        //
    }
}
