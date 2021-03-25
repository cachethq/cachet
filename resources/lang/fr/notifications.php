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
                'subject'  => 'État des composants mis à jour',
                'greeting' => 'L’état d’un composant a été mis à jour !',
                'content'  => ':name statut changé de  :old_status à :new_status.',
                'action'   => 'Affichage',
            ],
            'slack' => [
                'title'   => 'État des composants mis à jour',
                'content' => ':name statut changé de  :old_status à :new_status.',
            ],
            'sms' => [
                'content' => ':name statut changé de  :old_status à :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Nouvel incident signalé',
                'greeting' => 'Un nouvel incident a été signalé à l\'adresse :app_name.',
                'content'  => 'Incident :name a été signalé',
                'action'   => 'Affichage',
            ],
            'slack' => [
                'title'   => 'Incident :name a été signalé',
                'content' => 'Un nouvel incident a été signalé à l\'adresse :app_name.',
            ],
            'sms' => [
                'content' => 'Un nouvel incident a été signalé à l\'adresse :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incident mis à jour',
                'content' => ':name a été mis à jour',
                'title'   => ':name a été mis à jour pour :new_status',
                'action'  => 'Affichage',
            ],
            'slack' => [
                'title'   => ':name a été mis à jour',
                'content' => ':name a été mis à jour pour :new_status',
            ],
            'sms' => [
                'content' => 'Incident :name a été mis à jour',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nouveau calendrier créé',
                'content' => ':name est prévue pour :date',
                'title'   => 'Une nouvelle maintenance planifiée a été créée.',
                'action'  => 'Affichage',
            ],
            'slack' => [
                'title'   => 'Nouveau calendrier créé!',
                'content' => ':name est prévue pour :date',
            ],
            'sms' => [
                'content' => ':name est prévue pour :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Vérifiez votre abonnement',
                'content' => 'Cliquez pour vérifier votre abonnement à la page d\'état :app_name.',
                'title'   => 'Vérifiez votre abonnement à la page d\'état :app_name.',
                'action'  => 'Vérifier',
            ],
        ],
        'manage' => [
            'mail' => [
                'subject' => 'Gérer vos abonnements',
                'content' => 'Cliquez pour gérer votre abonnement à la page d\'état :app_name.',
                'title'   => 'Cliquez pour gérer votre abonnement à la page d\'état :app_name.',
                'action'  => 'Gérer l\'abonnement',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping de Cachet!',
                'content' => 'C’est une notification de test de Cachet !',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'YVotre invitation est à l’intérieur...',
                'content' => 'Vous avez été invité à vous joindre à la page d\'état:app_name.',
                'title'   => 'Vous êtes invité à rejoindre la page d\'état :app_name.',
                'action'  => 'Accept',
            ],
        ],
    ],
];
