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
                'subject'  => 'Statuts du Composant mis à jour',
                'greeting' => 'Le statut d\'un composant a été mis à jour!',
                'content'  => 'Le statut de :name est passé de :old_status à :new_status.',
                'action'   => 'Vue',
            ],
            'slack' => [
                'title'   => 'Statuts du Composant mis à jour',
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
                'greeting' => 'Un nouvel incident a été signalé à :app_name.',
                'content'  => 'L\'Incident :name a été signalé',
                'action'   => 'Vue',
            ],
            'slack' => [
                'title'   => 'L\'Incident :name signalé',
                'content' => 'Un nouvel incident a été signalé à :app_name.',
            ],
            'sms' => [
                'content' => 'Un nouvel incident a été signalé à :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incident mis à jour',
                'content' => ':name a été mis à jour',
                'title'   => ':name a été mis à jour pour :new_status',
                'action'  => 'Vue',
            ],
            'slack' => [
                'title'   => ':name mis à jour',
                'content' => ':name a été mis à jour pour :new_status',
            ],
            'sms' => [
                'content' => 'L\'Incident :name a été mis à jour',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nouvelle Maintenance créée',
                'content' => ':name a été planifiée le :date',
                'title'   => 'Une nouvelle Maintenance planifiée a été créée.',
                'action'  => 'Vue',
            ],
            'slack' => [
                'title'   => 'Nouvelle Maintenance créée!',
                'content' => ':name a été planifiée pour :date',
            ],
            'sms' => [
                'content' => ':name a été planifiée pour :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verifiez votre Abonnement',
                'content' => 'Cliquez pour vérifier votre abonnement à la page de statuts de :app_name.',
                'title'   => 'Verifiez votre abonnement à la page de statuts de :app_name.',
                'action'  => 'Verifier',
            ],
        ],
        'manage' => [
            'mail' => [
                'subject' => 'Gérer votre Abonnement',
                'content' => 'Cliquez pour gérer votre abonnement à la page de statuts de :app_name.',
                'title'   => 'Cliquez pour gérer votre abonnement à la page de statuts de :app_name.',
                'action'  => 'Gérer l\'abonnement',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping de Cachet!',
                'content' => 'Ceci est un test de notification depuis Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Votre invitation est à l\'intérieur...',
                'content' => 'Vous avez été invité à rejoindre la page de statuts de :app_name.',
                'title'   => 'Vous êtes invités à rejoindre la page de statuts de :app_name.',
                'action'  => 'Accepter',
            ],
        ],
    ],
];
