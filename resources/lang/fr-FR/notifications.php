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
                'subject'  => 'Statut du composant mis à jour',
                'greeting' => 'Le statut d\'un composant a été mis à jour !',
                'content'  => 'Le statut de :name a changé de :old_status à :new_status.',
                'action'   => 'Voir',
            ],
            'slack' => [
                'title'   => 'Statut du composant mis à jour',
                'content' => 'Le statut de :name a changé de :old_status à :new_status.',
            ],
            'sms' => [
                'content' => 'Le statut de :name a changé de :old_status à :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Nouvel incident signalé',
                'greeting' => 'Un nouvel incident a été signalé pour :app_name.',
                'content'  => 'Incident :name was reported',
                'action'   => 'Voir',
            ],
            'slack' => [
                'title'   => 'Incident reporté pour :name',
                'content' => 'Un nouvel incident a été signalé pour :app_name.',
            ],
            'sms' => [
                'content' => 'Un nouvel incident a été signalé pour :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incident mis à jour',
                'content' => ':name a été mis à jour',
                'title'   => ':name a été mis à jour au statut :new_status',
                'action'  => 'Voir',
            ],
            'slack' => [
                'title'   => ':name mis à jour',
                'content' => ':name a été mis à jour au statut :new_status',
            ],
            'sms' => [
                'content' => 'L\incident :name a été mis à jour au statut :new_status',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nouvel maintenance planifié !',
                'content' => ':name est planifié pour :date',
                'title'   => 'Une nouvelle maintenance planifiée a été créée.',
                'action'  => 'Voir',
            ],
            'slack' => [
                'title'   => 'Nouvel maintenance planifié !',
                'content' => ':name a été planifié pour :date',
            ],
            'sms' => [
                'content' => ':name a été planifié pour :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Vérifiez votre abonnement',
                'content' => 'Cliquez pour vérifier votre abonnement à la page d\état: :app_name.',
                'title'   => 'Vérifiez votre abonnement à la page de statut: :app_name.',
                'action'  => 'Verifier',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping de Cachet !',
                'content' => 'Ceci est une notification de test de Cachet !',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Votre invitation est à l\'intérieur ...',
                'content' => 'Vous avez été invité à rejoindre: page d\'état :app_name.',
                'title'   => 'Vous êtes invité à rejoindre la page d’état :app_name.',
                'action'  => 'Accepter',
            ],
        ],
    ],
];
