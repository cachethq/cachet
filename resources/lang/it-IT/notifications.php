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
                'subject'  => 'Aggiornato stato del componente',
                'greeting' => 'Lo stato di un componente è stato aggiornato!',
                'content'  => ':name stato cambiato da :old_status a :new_status.',
                'action'   => 'Visualizza',
            ],
            'slack' => [
                'title'   => 'Aggiornato stato del componente',
                'content' => ':name stato cambiato da :old_status a :new_status.',
            ],
            'sms' => [
                'content' => ':name stato cambiato da :old_status a :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Nuovo incidente segnalato',
                'greeting' => 'Un nuovo incidente è stato segnato su :app_name .',
                'content'  => 'L\'incidente :name è stato riportato',
                'action'   => 'Visualizza',
            ],
            'slack' => [
                'title'   => 'Incidente :name riportato',
                'content' => 'Un nuovo incidente è stato riportato su :app_name',
            ],
            'sms' => [
                'content' => 'Un nuovo incidente è stato segnato su :app_name .',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incidente aggiornato',
                'content' => ':name è stato aggiornato',
                'title'   => ':name è stato aggiornato a :new_status',
                'action'  => 'Visualizza',
            ],
            'slack' => [
                'title'   => ':name Aggiornato',
                'content' => ':name è stato aggiornato a :new_status',
            ],
            'sms' => [
                'content' => 'L\'incidente :name è stato aggiornato',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nuova schedulazione creata',
                'content' => ':name era schedulata per :date',
                'title'   => 'E\' stata creata una nuova manutenzione programmata.',
                'action'  => 'Visualizza',
            ],
            'slack' => [
                'title'   => 'Nuova schedulazione creata!',
                'content' => ':name era schedulata per :date',
            ],
            'sms' => [
                'content' => ':name era schedulata per :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verifica la tua sottoscrizione',
                'content' => 'Fare click per verifica la tua sottoscrizione a :app_name status page.',
                'title'   => 'Verifica la tua sottoscrizione a :app_name status page.',
                'action'  => 'Verifica',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping da Cachet!',
                'content' => 'Questa è una notifica di prova da Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Il tuo invito è all\'interno...',
                'content' => 'Siete stati invitati a partecipare alla pagina :app_name status.',
                'title'   => 'Siete stati invitati a partecipare alla pagina :app_name .',
                'action'  => 'Accetta',
            ],
        ],
    ],
];
