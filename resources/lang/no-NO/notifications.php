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
                'content' => 'En ny hendelse ble rapportert på :app_name',
            ],
            'sms' => [
                'content' => 'En ny hendelse ble rapportert på :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Hendelse oppdatert',
                'content' => ':name ble oppdatert',
                'title'   => ':name ble oppdatert til :new_status',
                'action'  => 'Vis',
            ],
            'slack' => [
                'title'   => ':name oppdatert',
                'content' => ':name ble oppdatert til :new_status',
            ],
            'sms' => [
                'content' => 'Hendelse :name ble oppdatert',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Ny tidsplan opprettet',
                'content' => ':name ble planlagt for :dato',
                'title'   => 'En ny planlagt vedlikehold ble opprettet.',
                'action'  => 'Vis',
            ],
            'slack' => [
                'title'   => 'Ny tidsplan opprettet!',
                'content' => ':name ble planlagt for :dato',
            ],
            'sms' => [
                'content' => ':name ble planlagt for :dato',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Bekreft ditt abonnement',
                'content' => 'Klikk for å bekrefte abonnementet til :app_name statussiden.',
                'title'   => 'Bekreft abonnementet til :app_name statussiden.',
                'action'  => 'Bekreft',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping fra Cachet!',
                'content' => 'Dette er en testnotifikasjon fra Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Din invitasjon er her...',
                'content' => 'Du har blitt invitert til å ta del i :app_name statussiden.',
                'title'   => 'Du er invitert til å ta del i :app_name statussiden.',
                'action'  => 'Aksepter',
            ],
        ],
    ],
];
