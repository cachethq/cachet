<?php

namespace CachetHQ\Cachet\Providers;

use CachetHQ\Cachet\Facades\Setting;
use Illuminate\Database\QueryException;
use Illuminate\Support\ServiceProvider;

class LoadConfigServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $appDomain = $appLocale = null;

        try {
            // Get app custom configuration.
            $appDomain = Setting::get('app_domain');
            $appLocale = Setting::get('app_locale');
        } catch (QueryException $e) {
            // Don't throw any errors, we may not be setup yet.
        }

        // Set the Segment.com settings.
        $segmentRepository = $this->app->make('CachetHQ\Cachet\Segment\RepositoryInterface');
        try {
            $this->app->config->set('segment.write_key', $segmentRepository->fetch());
        } catch (\GuzzleHttp\Exception\ConnectException $e) {
            // We may not have any connection. Let's not cry about it.
        }

        // Override default app values.
        $this->app->config->set('app.url', $appDomain ?: $this->app->config->get('app.url'));
        $this->app->config->set('app.locale', $appLocale ?: $this->app->config->get('app.locale'));

        // Set custom lang.
        $this->app->translator->setLocale($appLocale);
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
