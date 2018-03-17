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
                'action'   => 'Visa',
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
                'subject'  => 'Ny händelse rapporterad',
                'greeting' => 'A new incident was reported at :app_name.',
                'content'  => 'Incident :name was reported',
                'action'   => 'Visa',
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
                'subject' => 'Händelse uppdaterad',
                'content' => ': namn uppdaterades',
                'title'   => ':name uppdaterades till :new_status',
                'action'  => 'Visa',
            ],
            'slack' => [
                'title'   => ':name uppdaterat',
                'content' => ':name uppdaterades till :new_status',
            ],
            'sms' => [
                'content' => 'Incident :name uppdaterades',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nytt schema skapat',
                'content' => ':name was scheduled for :date',
                'title'   => 'A new scheduled maintenance was created.',
                'action'  => 'Visa',
            ],
            'slack' => [
                'title'   => 'Nytt schema skapat!',
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
                'subject' => 'Bekräfta din prenumeration',
                'content' => 'Klicka för att bekräfta din prenumeration på :app_name statussida.',
                'title'   => 'Bekräfta din prenumeration för :app_name statussida.',
                'action'  => 'Verifiera',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping från Cachet!',
                'content' => 'Detta är ett testmeddelande från Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Din inbjudan är inuti...',
                'content' => 'You have been invited to join :app_name status page.',
                'title'   => 'You\'re invited to join :app_name status page.',
                'action'  => 'Godkänn',
            ],
        ],
    ],
];
