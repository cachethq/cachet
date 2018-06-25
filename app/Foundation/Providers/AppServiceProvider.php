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

use AltThree\Bus\Dispatcher;
use AltThree\Validator\ValidatingMiddleware;
use CachetHQ\Cachet\Bus\Middleware\UseDatabaseTransactions;
use CachetHQ\Cachet\Services\Dates\DateFactory;
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
            return Dispatcher::simpleMapping($command, 'CachetHQ\Cachet\Bus', 'CachetHQ\Cachet\Bus\Handlers');
        });

        $dispatcher->pipeThrough([UseDatabaseTransactions::class, ValidatingMiddleware::class]);

        Str::macro('canonicalize', function ($url) {
            return preg_replace('/([^\/])$/', '$1/', $url);
        });

        Relation::morphMap([
            'components' => \CachetHQ\Cachet\Models\Component::class,
            'incidents'  => \CachetHQ\Cachet\Models\Incident::class,
            'metrics'    => \CachetHQ\Cachet\Models\Metric::class,
            'schedules'  => \CachetHQ\Cachet\Models\Schedule::class,
            'subscriber' => \CachetHQ\Cachet\Models\Subscriber::class,
            'tags'       => \CachetHQ\Cachet\Models\Tag::class,
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
