<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Providers;

use AltThree\Bus\Dispatcher;
use AltThree\Validator\ValidatingMiddleware;
use App\Bus\Middleware\UseDatabaseTransactions;
use App\Services\Dates\DateFactory;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

/**
 * This is the app service provider.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @param \AltThree\Bus\Dispatcher $dispatcher
     *
     * @return void
     */
    public function boot(Dispatcher $dispatcher)
    {
        Schema::defaultStringLength(191);

        $dispatcher->mapUsing(function ($command) {
            return Dispatcher::simpleMapping($command, 'App\Bus', 'App\Bus\Handlers');
        });

        $dispatcher->pipeThrough([UseDatabaseTransactions::class, ValidatingMiddleware::class]);

        Str::macro('canonicalize', function ($url) {
            return preg_replace('/([^\/])$/', '$1/', $url);
        });

        Relation::morphMap([
            'components' => \App\Models\Component::class,
            'incidents'  => \App\Models\Incident::class,
            'metrics'    => \App\Models\Metric::class,
            'schedules'  => \App\Models\Schedule::class,
            'subscriber' => \App\Models\Subscriber::class,
            'tags'       => \App\Models\Tag::class,
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerDateFactory();
    }

    /**
     * Register the date factory.
     *
     * @return void
     */
    protected function registerDateFactory()
    {
        $this->app->singleton(DateFactory::class, function ($app) {
            $appTimezone = $app['config']->get('app.timezone');
            $cacheTimezone = $app['config']->get('cachet.timezone');

            return new DateFactory($appTimezone, $cacheTimezone);
        });
    }
}
