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
    'common' => [
        'salutation'       => 'Viele Grüße,',
        'alternative_link' => 'Sollten Sie Probleme mit der ":actionText" Schaltfläche haben, können Sie auch die folgende URL in Ihren Browser kopieren: :actionURL',
    ],
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
                'subject'  => 'Neues Ereignis gemeldet',
                'greeting' => 'Ein neues Ereignis wurde auf der :app_name Statusseite gemeldet.',
                'content'  => 'Ereignis :name wurde gemeldet',
                'action'   => 'Anzeigen',
            ],
            'slack' => [
                'title'   => 'Ereignis :name gemeldet',
                'content' => 'Ein neues Ereignis wurde auf der :app_name Statusseite gemeldet',
            ],
            'sms' => [
                'content' => 'Ein neues Ereignis wurde auf der :app_name Statusseite gemeldet.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Ereignis aktualisiert',
                'content' => ':name wurde aktualisiert',
                'title'   => ':name wurde auf :new_status aktualisiert',
                'action'  => 'Anzeigen',
            ],
            'slack' => [
                'title'   => ':name aktualisiert',
                'content' => ':name wurde auf :new_status aktualisiert',
            ],
            'sms' => [
                'content' => 'Ereignis :name wurde aktualisiert',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Neuer Wartungszeitpunkt erstellt',
                'content' => ':name wurde für :date geplant',
                'title'   => 'Eine neue geplante Wartung wurde erstellt.',
                'action'  => 'Anzeigen',
            ],
            'slack' => [
                'title'   => 'Neuer Wartungszeitpunkt erstellt!',
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
        'manage' => [
            'mail' => [
                'subject' => 'Verwalten Sie Ihre Abonnements',
                'content' => 'Klicken Sie, um Ihre Abonnements von :app_name Statusseite zu verwalten.',
                'title'   => 'Klicken Sie, um Ihre Abonnements von :app_name Statusseite zu verwalten.',
                'action'  => 'Abonnements verwalten',
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
                'content' => 'Sie wurden eingeladen, um der :app_name Statusseite beizutreten.',
                'title'   => 'Sie sind dazu eingeladen, der :app_name Statusseite beizutreten.',
                'action'  => 'Akzeptieren',
            ],
        ],
    ],
];
