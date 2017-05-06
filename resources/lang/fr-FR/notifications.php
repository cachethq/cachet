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
                'subject'  => 'Le statut du composant a été mis à jour',
                'greeting' => 'Le statut d’un composant a été mis à jour !',
                'content'  => 'Le statut de :name est passé de :old_status à :new_status.',
                'action'   => 'View',
            ],
            'slack' => [
                'title'   => 'Le statut du composant a été mis à jour',
                'content' => 'Le statut de :name est passé de :old_status à :new_status.',
            ],
            'sms' => [
                'content' => 'Le statut de :name est passé de :old_status à :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Nouvel incident signalé',
                'greeting' => 'Un nouvel incident a été signalé pour :app_name.',
                'content'  => 'Incident :name a été signalé',
                'action'   => 'View',
            ],
            'slack' => [
                'title'   => 'Incident :name signalé',
                'content' => 'Un nouvel incident a été signalé pour :app_name',
            ],
            'sms' => [
                'content' => 'Un nouvel incident a été signalé pour :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incident mis à jour',
                'content' => ':name a été mis à jour',
                'title'   => ':name est passé à :new_status',
                'action'  => 'View',
            ],
            'slack' => [
                'title'   => ':name mis à jour',
                'content' => ':name est passé à :new_status',
            ],
            'sms' => [
                'content' => 'Incident :name a été mis à jour',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nouvelle planification créée',
                'content' => ':name a été planifié pour :date',
                'title'   => 'Une nouvelle maintenance planifiée a été créée.',
                'action'  => 'View',
            ],
            'slack' => [
                'title'   => 'Nouvelle planification créée !',
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
                'subject' => 'Veuillez vérifier votre abonnement',
                'content' => 'Cliquez ici pour vérifier votre abonnement à la page de statut de :app_name.',
                'title'   => 'Vérifiez votre abonnement à la page de statut de :app_name.',
                'action'  => 'Vérifier',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping depuis Cachet!',
                'content' => 'Ceci est une notification de test depuis Cachet !',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Votre invitation est à l\'intérieur...',
                'content' => 'Vous avez été invité à rejoindre la page de statut de :app_name.',
                'title'   => 'Vous êtes invité à rejoindre la page de statut de :app_name.',
                'action'  => 'Accepter',
            ],
        ],
    ],
];