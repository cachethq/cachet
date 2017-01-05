<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'component' => [
        'status_update' => [
            'subject' => 'Component Status Updated',
            'title'   => 'A component\'s status was updated!',
            'content' => ':name status changed from :old_status to :new_status.',
        ],
    ],
    'incident' => [
        'new' => [
            'subject' => 'New Incident Reported',
            'content' => ':name was reported',
            'title'   => 'A new incident was reported at :app_name status page.',
            'action'  => 'View',
        ],
        'update' => [
            'subject' => 'Incident Updated',
            'content' => ':name was updated',
            'title'   => ':name was updated to :new_status',
            'action'  => 'View',
        ],
    ],
    'schedule' => [
        'new' => [
            'subject' => 'New Schedule Created',
            'content' => ':name was scheduled for :date',
            'title'   => 'A new scheduled maintenance was created.',
            'action'  => 'View',
        ],
    ],
    'subscriber' => [
        'verify' => [
            'subject' => 'Verify Your Subscription',
            'content' => 'Click to verify your subscription to :app_name status page.',
            'title'   => 'Verify your subscription to :app_name status page.',
            'action'  => 'Verify',
        ],
    ],
    'system' => [
        'test' => [
            'subject' => 'Ping from Cachet!',
            'content' => 'This is a test notification from Cachet!',
            'title'   => '🔔',
        ],
    ],
    'user' => [
        'invite' => [
            'subject' => 'Your invitation is inside...',
            'content' => 'You have been invited to join :app_name status page.',
            'title'   => 'You\'re invited to join :app_name status page.',
            'action'  => 'Accept',
        ],
    ],
];
