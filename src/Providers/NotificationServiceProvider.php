<?php

namespace CachetHQ\Cachet\Providers;

use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Observers\IncidentObserver;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
    /**
     * Add the observer to the Incident Model.
     *
     * @return void
     */
    public function boot()
    {
        Incident::observe(new IncidentObserver());
    }
}
