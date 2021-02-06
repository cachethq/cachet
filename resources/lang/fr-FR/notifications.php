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
                'subject'  => 'Mise à jour du statut d\'un composant',
                'greeting' => 'Un composant a été mis à jour!',
                'content'  => 'Le statut de :name a changé de :old_status à :new_status.',
                'action'   => 'View',
            ],
            'slack' => [
                'title'   => 'Mise à jour du statut d\'un composant',
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
                'content'  => 'L\'incident :name a été signalé',
                'action'   => 'View',
            ],
            'slack' => [
                'title'   => 'Incident :name signalé',
                'content' => 'Une nouvel incident a été reporté pour :app_name',
            ],
            'sms' => [
                'content' => 'Un nouvel incident a été signalé pour :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incident :name mis à jourr',
                'content' => ':name a été mis à jour',
                'title'   => ':name a été mmis à jour vers :new_status',
                'action'  => 'View',
            ],
            'slack' => [
                'title'   => 'Incident :name mis à jour',
                'content' => ':name a été mis à jour vers :new_status',
            ],
            'sms' => [
                'content' => 'Incident :name mis à jour',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nouveau calendrier créé!',
                'content' => ':name a été planifié pour le :date',
                'title'   => 'Une nouvelle maintenance est planifiée.',
                'action'  => 'View',
            ],
            'slack' => [
                'title'   => 'Nouveau calendrier créé!',
                'content' => ':name a été planifié pour le :date',
            ],
            'sms' => [
                'content' => ':name a été planifié pour le :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Vérifier votre abonnement',
                'content' => 'Cliquer pour vérifier votre abonnement à :app_name status page.',
                'title'   => 'Vérifier votre abonnement à :app_name status page.',
                'action'  => 'Verify',
            ],
        ],
        'manage' => [
            'mail' => [
                'subject' => 'Gérer votre abonnement',
                'content' => 'Cliquer pour gérer votre abonnement à :app_name status page.',
                'title'   => 'Gérer votre abonnement à :app_name status page.',
                'action'  => 'Gérer l\'abonnement',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping from Cachet!',
                'content' => 'Ceci est une notification de la part de Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Votre invitation est ici...',
                'content' => 'Vous avez été invité à joindre :app_name status page.',
                'title'   => 'Vous avez été invité à joindre :app_name status page.',
                'action'  => 'Accept',
            ],
        ],
    ],
];
