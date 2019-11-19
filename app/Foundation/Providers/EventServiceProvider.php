<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Foundation\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Bus\Events\ActionInterface' => [
            'App\Bus\Handlers\Events\ActionStorageHandler',
        ],
        'App\Bus\Events\Beacon\BeaconFailedToSendEvent' => [
            'App\Bus\Handlers\Events\Beacon\LogBeaconFailedHandler',
        ],
        'App\Bus\Events\Beacon\BeaconWasSentEvent' => [
            //
        ],
        'App\Bus\Events\ComponentGroup\ComponentGroupWasCreatedEvent' => [
            //
        ],
        'App\Bus\Events\ComponentGroup\ComponentGroupWasRemovedEvent' => [
            //
        ],
        'App\Bus\Events\ComponentGroup\ComponentGroupWasUpdatedEvent' => [
            //
        ],
        'App\Bus\Events\Component\ComponentStatusWasChangedEvent' => [
            'App\Bus\Handlers\Events\Component\SendComponentUpdateEmailNotificationHandler',
        ],
        'App\Bus\Events\Component\ComponentWasCreatedEvent' => [
            //
        ],
        'App\Bus\Events\Component\ComponentWasRemovedEvent' => [
            'App\Bus\Handlers\Events\Component\CleanupComponentSubscriptionsHandler',
        ],
        'App\Bus\Events\Component\ComponentWasUpdatedEvent' => [
            //
        ],
        'App\Bus\Events\IncidentUpdate\IncidentUpdateWasRemovedEvent' => [
            //
        ],
        'App\Bus\Events\IncidentUpdate\IncidentUpdateWasReportedEvent' => [
            'App\Bus\Handlers\Events\IncidentUpdate\SendIncidentUpdateEmailNotificationHandler',
        ],
        'App\Bus\Events\IncidentUpdate\IncidentUpdateWasUpdatedEvent' => [
            //
        ],
        'App\Bus\Events\Incident\IncidentWasCreatedEvent' => [
            'App\Bus\Handlers\Events\Incident\SendIncidentEmailNotificationHandler',
        ],
        'App\Bus\Events\Incident\IncidentWasRemovedEvent' => [
            //
        ],
        'App\Bus\Events\Incident\IncidentWasUpdatedEvent' => [
            //
        ],
        'App\Bus\Events\Invite\InviteWasClaimedEvent' => [
            //
        ],
        'App\Bus\Events\Metric\MetricPointWasCreatedEvent' => [
            //
        ],
        'App\Bus\Events\Metric\MetricPointWasRemovedEvent' => [
            //
        ],
        'App\Bus\Events\Metric\MetricPointWasUpdatedEvent' => [
            //
        ],
        'App\Bus\Events\Metric\MetricWasCreatedEvent' => [
            //
        ],
        'App\Bus\Events\Metric\MetricWasRemovedEvent' => [
            //
        ],
        'App\Bus\Events\Metric\MetricWasUpdatedEvent' => [
            //
        ],
        'App\Bus\Events\Schedule\ScheduleWasCreatedEvent' => [
            'App\Bus\Handlers\Events\Schedule\SendScheduleEmailNotificationHandler',
        ],
        'App\Bus\Events\Schedule\ScheduleWasRemovedEvent' => [
            //
        ],
        'App\Bus\Events\Schedule\ScheduleWasUpdatedEvent' => [
            //
        ],
        'App\Bus\Events\Subscriber\SubscriberHasSubscribedEvent' => [
            //
        ],
        'App\Bus\Events\Subscriber\SubscriberHasUnsubscribedEvent' => [
            //
        ],
        'App\Bus\Events\Subscriber\SubscriberHasUpdatedSubscriptionsEvent' => [
            //
        ],
        'App\Bus\Events\Subscriber\SubscriberHasVerifiedEvent' => [
            //
        ],
        'App\Bus\Events\System\SystemCheckedForUpdatesEvent' => [
            //
        ],
        'App\Bus\Events\System\SystemWasInstalledEvent' => [
            //
        ],
        'App\Bus\Events\System\SystemWasResetEvent' => [
            //
        ],
        'App\Bus\Events\System\SystemWasUpdatedEvent' => [
            //
        ],
        'App\Bus\Events\User\UserAcceptedInviteEvent' => [
            //
        ],
        'App\Bus\Events\User\UserDisabledTwoAuthEvent' => [
            //
        ],
        'App\Bus\Events\User\UserEnabledTwoAuthEvent' => [
            //
        ],
        'App\Bus\Events\User\UserFailedTwoAuthEvent' => [
            //
        ],
        'App\Bus\Events\User\UserLoggedInEvent' => [
            //
        ],
        'App\Bus\Events\User\UserLoggedOutEvent' => [
            //
        ],
        'App\Bus\Events\User\UserPassedTwoAuthEvent' => [
            //
        ],
        'App\Bus\Events\User\UserRegeneratedApiTokenEvent' => [
            //
        ],
        'App\Bus\Events\User\UserWasCreatedEvent' => [
            //
        ],
        'App\Bus\Events\User\UserWasInvitedEvent' => [
            //
        ],
        'App\Bus\Events\User\UserWasRemovedEvent' => [
            //
        ],
        'App\Bus\Events\User\UserWasWelcomedEvent' => [
            //
        ],
    ];
}
