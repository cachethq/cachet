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
                'subject'  => 'Komponentstatus oppdatert',
                'greeting' => 'En komponents status ble oppdatert!',
                'content'  => ':name status endret fra :old_status til :new_status.',
                'action'   => 'Vis',
            ],
            'slack' => [
                'title'   => 'Komponentstatus oppdatert',
                'content' => ':name status endret fra :old_status til :new_status.',
            ],
            'sms' => [
                'content' => ':name status endret fra :old_status til :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Ny hendelse rapportert',
                'greeting' => 'En ny hendelse ble rapportert på :app_name.',
                'content'  => 'Hendelsen :name ble rapportert',
                'action'   => 'Vis',
            ],
            'slack' => [
                'title'   => 'Hendelse :name rapportert',
                'content' => 'A new incident was reported at :app_name',
            ],
            'sms' => [
                'content' => 'En ny hendelse ble rapportert på :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Hendelse oppdatert',
                'content' => ':name was updated',
                'title'   => ':name was updated to :new_status',
                'action'  => 'Vis',
            ],
            'slack' => [
                'title'   => ':name oppdatert',
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
                'action'  => 'Vis',
            ],
            'slack' => [
                'title'   => 'New Schedule Created!',
                'content' => ':name was scheduled for :date',
            ],
            'sms' => [
                'content' => ':name was scheduled for :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verify Your Subscription',
                'content' => 'Click to verify your subscription to :app_name status page.',
                'title'   => 'Verify your subscription to :app_name status page.',
                'action'  => 'Bekreft',
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
                'action'  => 'Aksepter',
            ],
        ],
    ],
];
