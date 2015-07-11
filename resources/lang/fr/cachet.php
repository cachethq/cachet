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
    // Components
    'components' => [
        'status' => [
            1 => 'Opérationnel',
            2 => 'Problème de performances',
            3 => 'Panne partielle',
            4 => 'Panne majeure',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Aucun incident reporté.',
        'past'          => 'Incidents précédents',
        'previous_week' => 'Semaine précédente',
        'next_week'     => 'Semaine suivante',
        'none'          => 'Rien à reporter',
        'scheduled'     => 'Maintenance planifiée',
        'scheduled_at'  => ', prévue à :timestamp',
        'status'        => [
            0 => '',
            1 => 'Enquête en cours',
            2 => 'Identifié',
            3 => 'Sous surveillance',
            4 => 'Corrigé',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Tous les services sont fonctionnels.',
        'bad'  => 'Certains services rencontrent des problèmes.',
    ],

    'api' => [
        'regenerate' => 'Regénérer une clé d\'API',
        'revoke'     => 'Révoquer cette clé d\'API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Par heure',
            'daily'   => 'Par jour',
            'monthly' => 'Par mois',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates.',
        'button'    => 'Subscribe',
        'email'     => [
            'subscribe'    => 'Subscribe to email updates.',
            'subscribed'   => 'You\'ve been subscribed to email notifications, please check your email to confirm your subscription.',
            'verified'     => 'Your email subscription has been confirmed. Thank you!',
            'unsubscribe'  => 'Unsuscribe from email updates.',
            'unsubscribed' => 'Your email subscription has been cancelled.',
            'failure'      => 'Something went wrong with the subscription.',
            'verify'       => [
                'text'           => "Please confirm your email subscription to :app_name status updates.\n:link\nThank you, :app_name",
                'html-preheader' => 'Please confirm your email subscription to :app_name status updates.',
                'html'           => '<p>Please confirm your email subscription to :app_name status updates.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "New maintenance has been scheduled on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New maintenance has been scheduled on :app_name.',
                'html'           => '<p>New maintenance has been scheduled on :app_name.</p><p>Thank you, :app_name</p>',
            ],
            'incident' => [
                'text'           => "New incident has been reported on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New incident has been reported on :app_name.',
                'html'           => '<p>New incident has been reported on :app_name.</p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => ':app Status Page est propulsé par <a href="https://cachethq.github.io">Cachet</a>.',
    'about_this_site' => 'À propos de ce site',
    'rss-feed'        => 'Flux RSS',
    'atom-feed'       => 'Flux Atom',
    'feed'            => 'Flux des services',

];
