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
                'content'  => 'Vorfall: Name wurde gemeldet',
                'action'   => 'Anzeigen',
            ],
            'slack' => [
                'title'   => 'Vorfall: :name wurde gemeldet',
                'content' => 'Ein neuer Vorfall wurde auf der :app_name Status Seite gemeldet',
            ],
            'sms' => [
                'content' => 'Ein neuer Vorfall wurde auf der :app_name Status Seite gemeldet.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Vorfall aktualisiert',
                'content' => ':name wurde aktualisiert',
                'title'   => ':name wurde auf :new_status aktualisiert',
                'action'  => 'Anzeigen',
            ],
            'slack' => [
                'title'   => ':name wurde aktualisiert',
                'content' => ':name wurde auf :new_status aktualisiert',
            ],
            'sms' => [
                'content' => 'Vorfall :name wurde aktualisiert',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Neuer Zeitplan erstellt',
                'content' => ':name wurde für :date geplant',
                'title'   => 'Eine neue geplante Wartung wurde erstellt.',
                'action'  => 'Anzeigen',
            ],
            'slack' => [
                'title'   => 'Neuer wurde Zeitplan erstellt!',
                'content' => ':name wurde für :date geplant',
            ],
            'sms' => [
                'content' => ':name wurde für :date geplant',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Bitte bestätigen Sie Ihr Abonnement',
                'content' => 'Klicken Sie, um Ihr Abonnement von :app_name Statusseite zu bestätigen.',
                'title'   => 'Bestätigen Sie Ihr Abonnement für die :app_name Statusseite.',
                'action'  => 'Bestätigen',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping von Cachet!',
                'content' => 'Dies ist eine Test-Benachrichtigung von Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Ihre Einladung wartet auf Sie...',
                'content' => 'Sie wurden eingeladen um der :app_name Statusseite beizutreten.',
                'title'   => 'Sie wurden eingeladen um der :app_name Statusseite beizutreten.',
                'action'  => 'Akzeptieren',
            ],
        ],
    ],
];
