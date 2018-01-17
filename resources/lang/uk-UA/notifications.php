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
                'action'   => 'Подання',
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
                'subject'  => 'Нове повідомлення про інцидент',
                'greeting' => 'Нове повідомлення про інцидент на сторінці :app_name.',
                'content'  => 'Інцидент: ім\'я було повідомлено',
                'action'   => 'Подання',
            ],
            'slack' => [
                'title'   => 'Інцидент: ім\'я повідомлено',
                'content' => 'Нове повідомлення про інцидент на сторінці :app_name',
            ],
            'sms' => [
                'content' => 'Нове повідомлення про інцидент на сторінці :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Інцидент оновлено',
                'content' => ':name was updated',
                'title'   => ':name was updated to :new_status',
                'action'  => 'Подання',
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
                'action'  => 'Подання',
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
                'action'  => 'Прийняти',
            ],
        ],
    ],
];
