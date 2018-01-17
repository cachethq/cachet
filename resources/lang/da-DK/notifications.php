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
                'subject'  => 'Komponentstatus opdateret',
                'greeting' => 'En komponents status blev opdateret!',
                'content'  => ':name status blev ændret fra :old_status til :new_status.',
                'action'   => 'Vis',
            ],
            'slack' => [
                'title'   => 'Komponentstatus opdateret',
                'content' => ':name status blev ændret fra :old_status til :new_status.',
            ],
            'sms' => [
                'content' => ':name status blev ændret fra :old_status til :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Ny hændelse indrapporteret',
                'greeting' => 'En ny hændelse blev rapporteret på :app_name.',
                'content'  => 'Hændelse :name blev rapporteret',
                'action'   => 'Vis',
            ],
            'slack' => [
                'title'   => 'Hændelse :name Rapporteret',
                'content' => 'En ny hændelse blev rapporteret på :app_name',
            ],
            'sms' => [
                'content' => 'En ny hændelse blev rapporteret på :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Hændelse opdateret',
                'content' => ':name blev opdateret',
                'title'   => ':name blev opdateret til :new_status',
                'action'  => 'Vis',
            ],
            'slack' => [
                'title'   => ':name opdateret',
                'content' => ':name blev opdateret til :new_status',
            ],
            'sms' => [
                'content' => 'Hændelse :name blev opdateret',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Ny tidsplan oprettet',
                'content' => ':name blev planlagt til :date',
                'title'   => 'En ny planlagt vedligeholdelse blev oprettet.',
                'action'  => 'Vis',
            ],
            'slack' => [
                'title'   => 'Ny tidsplan oprettet!',
                'content' => ':name blev planlagt til :date',
            ],
            'sms' => [
                'content' => ':name blev planlagt til :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Bekræft dit abonnement',
                'content' => 'Tryk for at bekræfte dit abonnement :app_name-statussiden.',
                'title'   => 'Bekræft dit abonnement via :app_name-statussiden.',
                'action'  => 'Bekræft',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping fra Cachet!',
                'content' => 'Dette er en testnotifikation fra Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Din invitationen er heri...',
                'content' => 'Du er inviteret til at tilmelde dig :app_name-statussiden.',
                'title'   => 'Du er inviteret til at tilmelde dig :app_name-statussiden.',
                'action'  => 'Acceptér',
            ],
        ],
    ],
];
