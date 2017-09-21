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
                'subject'  => 'Component status bijgewerkt',
                'greeting' => 'De status van een component is bijgewerkt!',
                'content'  => ':name status is veranderd van :old_status naar :new_status.',
                'action'   => 'Tonen',
            ],
            'slack' => [
                'title'   => 'Component status bijgewerkt',
                'content' => ':name status is veranderd van :old_status naar :new_status.',
            ],
            'sms' => [
                'content' => ':name status is veranderd van :old_status naar :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Nieuw incident gemeld',
                'greeting' => 'Er is een nieuw incident gemeld voor :app_name.',
                'content'  => 'Incident :name is gerapporteerd',
                'action'   => 'Tonen',
            ],
            'slack' => [
                'title'   => 'Incident :name is gerapporteerd',
                'content' => 'Er is een nieuw incident gemeld voor :app_name',
            ],
            'sms' => [
                'content' => 'Er is een nieuw incident gemeld voor :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incident bijgewerkt',
                'content' => ':name is bijgewerkt',
                'title'   => ':name is bijgewerkt naar :new_status',
                'action'  => 'Tonen',
            ],
            'slack' => [
                'title'   => ':name is bijgewerkt',
                'content' => ':name is bijgewerkt naar :new_status',
            ],
            'sms' => [
                'content' => 'Incident :name is bijgewerkt',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nieuw tijdschema aangemaakt',
                'content' => ':name is ingepland voor :date',
                'title'   => 'Nieuw gepland onderhoud aangemaakt.',
                'action'  => 'Tonen',
            ],
            'slack' => [
                'title'   => 'Nieuw tijdschema aangemaakt!',
                'content' => ':name is ingepland voor :date',
            ],
            'sms' => [
                'content' => ':name is ingepland voor :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Bevestig je inschrijving',
                'content' => 'Klik om je inschrijving op :app_name statuspagina te bevestigen.',
                'title'   => 'Bevestig je inschrijving voor de :app_name statuspagina.',
                'action'  => 'Verifiëren',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping van Cachet!',
                'content' => 'Dit is een testnotificatie van Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Je uitnodiging zit in deze mail...',
                'content' => 'Je bent uitgenodigd voor de :app_name statuspagina.',
                'title'   => 'Je bent uitgenodigd voor :app_name statuspagina.',
                'action'  => 'Accepteer',
            ],
        ],
    ],
];
