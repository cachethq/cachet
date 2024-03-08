?php

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
                'subject'  => 'Évolution du statut d’un service',
                'greeting' => 'Le statut d’un service a été mis-à-jour !',
                'content'  => 'L’état du service :name est passé de :old_status à :new_status.',
                'action'   => 'Voir le statut',
            ],
            'slack' => [
                'title'   => 'Évolution du statut d’un service',
                'content' => 'L’état du service :name est passé de :old_status à :new_status.',
            ],
            'sms' => [
                'content' => 'L’état du service :name est passé de :old_status à :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Nouvel incident signalé',
                'greeting' => 'Un nouvel incident a été signalé pour :app_name.',
                'content'  => 'L’incident :name a été signalé',
                'action'   => 'Voir l’incident',
            ],
            'slack' => [
                'title'   => 'Nouvel incident signalé',
                'content' => 'Un nouvel incident a été signalé pour :app_name.',
            ],
            'sms' => [
                'content' => 'Un nouvel incident a été signalé pour :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Mise-à-jour d’un incident',
                'content' => 'L’incident :name a été mis-à-jour.',
                'title'   => 'L’incident :name est passé à :new_status',
                'action'  => 'Voir l’incident',
            ],
            'slack' => [
                'title'   => 'Mise-à-jour d’un incident',
                'content' => 'L’incident :name est passé à :new_status',
            ],
            'sms' => [
                'content' => 'L’incident :name a été mis-à-jour',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nouvelle maintenance planifiée',
                'content' => 'Une maintenance :name a été planifiée pour le :date.',
                'title'   => 'Une nouvelle maintenance est planifiée.',
                'action'  => 'Voir la maintenance',
            ],
            'slack' => [
                'title'   => 'Nouvelle maintenance planifiée !',
                'content' => 'Une maintenance :name a été planifiée pour le :date.',
            ],
            'sms' => [
                'content' => 'Une maintenance :name a été planifiée pour le :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Confirmez votre abonnement',
                'content' => 'Cliquez pour valider votre adresse mail et confirmer votre abonnement à la page de statut :app_name.',
                'title'   => 'Confirmez votre abonnement à la page de statut :app_name.',
                'action'  => 'Confirmer l’abonnement',
            ],
        ],
        'manage' => [
            'mail' => [
                'subject' => 'Gérez votre abonnement',
                'content' => 'Cliquez pour gérer votre abonnement à la page de statut :app_name.',
                'title'   => 'Cliquez pour gérer votre abonnement à la page de statut :app_name.',
                'action'  => 'Gérer l’abonnement',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping depuis Cachet!',
                'content' => 'Ceci est un test de notification depuis Cachet !',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Vous avez reçu une invitation…',
                'content' => 'Vous avez été invité à rejoindre la page de statut :app_name.',
                'title'   => 'Vous êtes invité à rejoindre la page de statut :app_name.',
                'action'  => 'Accepter',
            ],
        ],
    ],
];
