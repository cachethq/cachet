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
            'mail' => [
                'subject'  => 'Component Status Updated',
                'greeting' => 'A component\'s status was updated!',
                'content'  => ':name status changed from :old_status to :new_status.',
                'action'   => 'View',
            ],
            'slack' => [
                'title'   => 'Component Status Updated',
                'content' => ':name status changed from :old_status to :new_status.',
            ],
            'sms' => [
                'content' => ':name status changed from :old_status to :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'New Incident Reported',
                'greeting' => 'A new incident was reported at :app_name.',
                'content'  => 'Incident :name was reported',
                'action'   => 'View',
            ],
            'slack' => [
                'title'   => 'Incident :name Reported',
                'content' => 'A new incident was reported at :app_name',
            ],
            'sms' => [
                'content' => 'A new incident was reported at :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incident Updated',
                'content' => ':name was updated',
                'title'   => ':name was updated to :new_status',
                'action'  => 'View',
            ],
            'slack' => [
                'title'   => ':name Updated',
                'content' => ':name was updated to :new_status',
            ],
            'sms' => [
                'content' => 'Incident :name was updated',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'New Schedule Created',
                'content' => ':name was scheduled for :date',
                'title'   => 'A new scheduled maintenance was created.',
                'action'  => 'View',
            ],
            'slack' => [
                'title'   => 'New Schedule Created!',
                'content' => ':name was scheduled for :date',
            ],
            'sms' => [
                'content' => ':name was scheduled for :date',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Schedule Updated',
                'content' => ':name is scheduled for :date',
                'title'   => 'A scheduled maintenance was updated.',
                'action'  => 'View',
            ],
            'slack' => [
                'title'   => 'Schedule Updated!',
                'content' => ':name is scheduled for :date',
            ],
            'sms' => [
                'content' => ':name is scheduled for :date',
            ],
        ],
        'remove' => [
            'mail' => [
                'subject' => 'Schedule Removed',
                'content' => ':name schedule for :date was removed',
                'title'   => 'A scheduled maintenance was removed.',
                'action'  => 'View',
            ],
            'slack' => [
                'title'   => 'Schedule Removed!',
                'content' => ':name schedule for :date was removed',
            ],
            'sms' => [
                'content' => ':name schedule for :date was removed',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verify Your Subscription',
                'content' => 'Click to verify your subscription to :app_name status page.',
                'title'   => 'Verify your subscription to :app_name status page.',
                'action'  => 'Verify',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping from Cachet!',
                'content' => 'This is a test notification from Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Your invitation is inside...',
                'content' => 'You have been invited to join :app_name status page.',
                'title'   => 'You\'re invited to join :app_name status page.',
                'action'  => 'Accept',
            ],
        ],
    ],
];
