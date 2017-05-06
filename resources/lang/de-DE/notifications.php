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
                'subject'  => 'Status der Komponente aktualisiert',
                'greeting' => 'Ein Komponentenstatus wurde aktualisiert!',
                'content'  => ':name Status wurde von :old_status zu :new_status geändert.',
                'action'   => 'Anzeigen',
            ],
            'slack' => [
                'title'   => 'Status der Komponente aktualisiert',
                'content' => ':name Status wurde von :old_status zu :new_status geändert.',
            ],
            'sms' => [
                'content' => ':name Status wurde von :old_status zu :new_status geändert.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Neuer Vorfall gemeldet',
                'greeting' => 'Ein neuer Vorfall wurde auf der :app_name Status Seite gemeldet.',
                'content'  => 'Incident :name was reported',
                'action'   => 'Anzeigen',
            ],
            'slack' => [
                'title'   => 'Incident :name Reported',
                'content' => 'A new incident was reported at :app_name',
            ],
            'sms' => [
                'content' => 'Ein neuer Vorfall wurde auf der :app_name Status Seite gemeldet.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incident Updated',
                'content' => ':name was updated',
                'title'   => ':name was updated to :new_status',
                'action'  => 'Anzeigen',
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
                'action'  => 'Anzeigen',
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
