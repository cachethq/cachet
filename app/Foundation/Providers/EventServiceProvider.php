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

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'CachetHQ\Cachet\Events\ComponentGroup\ComponentGroupWasAddedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\ComponentGroup\ComponentGroupWasRemovedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\ComponentGroup\ComponentGroupWasUpdatedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\Component\ComponentWasAddedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\Component\ComponentWasRemovedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\Component\ComponentWasUpdatedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\Incident\IncidentWasReportedEvent' => [
            'CachetHQ\Cachet\Handlers\Events\Incident\SendIncidentEmailNotificationHandler',
        ],
        'CachetHQ\Cachet\Events\Incident\MaintenanceWasScheduledEvent' => [
            'CachetHQ\Cachet\Handlers\Events\Incident\SendMaintenanceEmailNotificationHandler',
        ],
        'CachetHQ\Cachet\Events\Invite\InviteWasClaimedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\Metric\MetricPointWasAddedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\Metric\MetricPointWasRemovedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\Metric\MetricPointWasUpdatedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\Metric\MetricWasAddedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\Metric\MetricWasRemovedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\Metric\MetricWasUpdatedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\Subscriber\SubscriberHasSubscribedEvent' => [
            'CachetHQ\Cachet\Handlers\Events\Subscriber\SendSubscriberVerificationEmailHandler',
        ],
        'CachetHQ\Cachet\Events\Subscriber\SubscriberHasUnsubscribedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\Subscriber\SubscriberHasVerifiedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\User\UserWasAddedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Events\User\UserWasInvitedEvent' => [
            'CachetHQ\Cachet\Handlers\Events\User\SendInviteUserEmailHandler',
        ],
    ];
}
