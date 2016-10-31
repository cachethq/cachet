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
        'CachetHQ\Cachet\Bus\Events\Beacon\BeaconFailedToSendEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Beacon\BeaconWasSentEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasAddedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasRemovedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasUpdatedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Component\ComponentStatusWasUpdatedEvent' => [
            'CachetHQ\Cachet\Bus\Handlers\Events\Component\SendComponentUpdateEmailNotificationHandler',
        ],
        'CachetHQ\Cachet\Bus\Events\Component\ComponentWasAddedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Component\ComponentWasRemovedEvent' => [
            'CachetHQ\Cachet\Bus\Handlers\Events\Component\CleanupComponentSubscriptionsHandler',
        ],
        'CachetHQ\Cachet\Bus\Events\Component\ComponentWasUpdatedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Incident\IncidentWasRemovedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Incident\IncidentWasReportedEvent' => [
            'CachetHQ\Cachet\Bus\Handlers\Events\Incident\SendIncidentEmailNotificationHandler',
        ],
        'CachetHQ\Cachet\Bus\Events\Incident\IncidentWasUpdatedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Incident\IncidentWasRemovedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Incident\MaintenanceWasScheduledEvent' => [
            'CachetHQ\Cachet\Bus\Handlers\Events\Incident\SendMaintenanceEmailNotificationHandler',
        ],
        'CachetHQ\Cachet\Bus\Events\Invite\InviteWasClaimedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Metric\MetricPointWasAddedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Metric\MetricPointWasRemovedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Metric\MetricPointWasUpdatedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Metric\MetricWasAddedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Metric\MetricWasRemovedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Metric\MetricWasUpdatedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasSubscribedEvent' => [
            'CachetHQ\Cachet\Bus\Handlers\Events\Subscriber\SendSubscriberVerificationEmailHandler',
        ],
        'CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasUnsubscribedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasUpdatedSubscriptionsEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasVerifiedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\System\SystemCheckedForUpdatesEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\System\SystemWasInstalledEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\System\SystemWasResetEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\System\SystemWasUpdatedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\User\UserDisabledTwoAuthEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\User\UserEnabledTwoAuthEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\User\UserFailedTwoAuthEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\User\UserLoggedInEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\User\UserLoggedOutEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\User\UserPassedTwoAuthEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\User\UserRegeneratedApiTokenEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\User\UserWasAddedEvent' => [
            //
        ],
        'CachetHQ\Cachet\Bus\Events\User\UserWasInvitedEvent' => [
            'CachetHQ\Cachet\Bus\Handlers\Events\User\SendInviteUserEmailHandler',
        ],
        'CachetHQ\Cachet\Bus\Events\User\UserWasRemovedEvent' => [
            //
        ],
    ];
}
