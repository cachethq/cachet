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
            1 => 'Funktionsfähig',
            2 => 'Leistungsprobleme',
            3 => 'Teilweiser Ausfall',
            4 => 'Schwerer Ausfall',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Aucun incident signalé',
        'past'          => 'Incidents antérieurs',
        'previous_week' => 'Semaine précédente',
        'next_week'     => 'Semaine suivante',
        'scheduled'     => 'Geplante Wartungen',
        'scheduled_at'  => ', geplant :timestamp',
        'status'        => [
            0 => 'Geplant', // TODO: Hopefully remove this.
            1 => 'Untersuchungen laufen',
            2 => 'Identifiziert',
            3 => 'Unter Beobachtung',
            4 => 'Behoben',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Système opérationnel|[2,Inf] Tous les systèmes sont opérationnels',
        'bad'   => '[0,1] Le système rencontre actuellement des problèmes|[2,Inf] Certains systèmes rencontrent des problèmes',
        'major' => '[0,1] Le service rencontre une panne majeure|[2,Inf] Certains systèmes rencontrent une panne majeure',
    ],

    'api' => [
        'regenerate' => 'API-Schlüssel neu generieren',
        'revoke'     => 'API-Schlüssel widerrufen',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Dernière heure',
            'hourly'    => 'Last 12 Hours',
            'weekly'    => 'Week',
            'monthly'   => 'Month',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Abonnez-vous pour obtenir les dernières mises à jour.',
        'button'    => 'Abonnieren',
        'email'     => [
            'subscribe'          => 'Aktualisierungen per E-Mail abonnieren.',
            'subscribed'         => 'Sie haben E-Mail-Benachrichtigungen abonniert, überprüfen Sie bitte Ihre E-Mail, um Ihr Abonnement zu bestätigen.',
            'verified'           => 'Ihre E-Mail-Abonnement ist bestätigt worden. Danke!',
            'unsubscribe'        => 'Désinscription des mises à jour par courriel.',
            'unsubscribed'       => 'Ihre E-Mail-Abonnement wurde gekündigt.',
            'failure'            => 'Etwas ist mit dem Abonnement schief gelaufen.',
            'already-subscribed' => 'Impossible de s\'abonner avec l\'adresse e-mail :email car celle-ci est déjà abonné.',
            'verify'             => [
                'text'           => "Bitte bestätigen Sie Ihre E-Mail-Abonnement zu :app_name Status-Aktualisierungen.\n:link\nDanke, :app_name",
                'html-preheader' => 'Bitte bestätigen Sie Ihre E-Mail-Abonnement zu :app_name Status-Aktualisierungen.',
                'html'           => '<p>Bestätigen Sie bitte Ihr E-Mail-Abonnement für :app_name Statusaktualisierungen.</p><p><a href=":link">:link</a></p><p>Danke, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Neue Wartung wurde für :app_name geplant.\nDanke, :app_name",
                'html-preheader' => 'Neue Wartung wurde für :app_name geplant.',
                'html'           => '<p>Neue Wartung wurde für :app_name geplant.</p>',
            ],
            'incident' => [
                'text'           => "Ein neuer Vorfall wurde auf :app_name berichtet.\nDanke, :app_name",
                'html-preheader' => 'Ein neuer Vorfall wurde über :app_name berichtet.',
                'html'           => '<p>Ein neuer Vorfall wurde über :app_name berichtet.</p> <p>Danke, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Statut de la mise à jour du composant',
                'text'           => 'Le composant :component_name a vu son statut changé. Le composant est maintenant à :component_human_status.\nMerci, :app_name',
                'html-preheader' => 'Mise à jour du composant sur :app_name',
                'html'           => '<p>Le composant :component_name a vu son statut changé. Le composant est maintenant à :component_human_status.</p><p>Merci, :app_name</p>',
                'tooltip-title'  => 'S\'abonner aux notifications pour :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "Vous avez été invité à la page de statut de l'équipe :app_name , veuillez suivre le lien suivant pour vous inscire \n:link\nMerci, :app_name",
                'html-preheader' => 'Vous avez été invité à rejoindre l\'équipe :app_name.',
                'html'           => '<p>Vous avez été invité à la page de statut de l\'équipe :app_name, veuillez suivre le lien suivant pour vous inscrire.</p><p><a href=":link">:link</a></p><p>Merci, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Inscription',
        'username' => 'Nom d\'utilisateur',
        'email'    => 'Adresse email',
        'password' => 'Mot de passe ',
        'success'  => 'Votre compte a été créé.',
        'failure'  => 'Une erreur est survenue lors de votre inscription.',
    ],

    'system' => [
        'update' => 'Il y a une nouvelle version disponible de Cachet. Vous pouvez apprendre comment le mettre à jour <a href="https://docs.cachethq.io/docs/updating-cachet">ici</a> !',
    ],

    // Modal
    'modal' => [
        'close'     => 'Fermer',
        'subscribe' => [
            'title'  => 'Abonnez-vous pour les mises à jour du composant',
            'body'   => 'Entrez votre adresse e-mail pour vous abonner aux mises à jour pour ce composant. Si vous êtes déjà inscrit, vous devrez déjà recevoir des e-mails pour ce composant.',
            'button' => 'Abonnieren',
        ],
    ],

    // Other
    'powered_by'      => ':app Status Page est propulsé par <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'À propos du site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status-Feed',

];
