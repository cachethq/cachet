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

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'CachetHQ\Cachet\Events\SubscriberHasSubscribedEvent' => [
            'CachetHQ\Cachet\Handlers\Events\SendSubscriberVerificationEmailHandler',
        ],
        'CachetHQ\Cachet\Events\IncidentHasReportedEvent' => [
            'CachetHQ\Cachet\Handlers\Events\SendIncidentEmailNotificationHandler',
        ],
        'CachetHQ\Cachet\Events\MaintenanceHasScheduledEvent' => [
            'CachetHQ\Cachet\Handlers\Events\SendMaintenanceEmailNotificationHandler',
        ],
    ];
}
