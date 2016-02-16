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
            2 => 'Problèmes de performances',
            3 => 'Panne partielle',
            4 => 'Panne majeure',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Aucun incident signalé',
        'past'          => 'Incidents antérieurs',
        'previous_week' => 'Semaine précédente',
        'next_week'     => 'Semaine suivante',
        'scheduled'     => 'Geplante Wartungen',
        'scheduled_at'  => ', planifé à :timestamp',
        'status'        => [
            0 => 'Planifié', // TODO: Hopefully remove this.
            1 => 'Enquête en cours',
            2 => 'Identifié',
            3 => 'Sous surveillance',
            4 => 'Corrigé',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Système opérationnel|[2,Inf] Tous les systèmes sont opérationnels',
        'bad'   => '[0,1] Le système rencontre actuellement des problèmes|[2,Inf] Certains systèmes rencontrent des problèmes',
        'major' => '[0,1] Le service rencontre une panne majeure|[2,Inf] Certains systèmes rencontrent une panne majeure',
    ],

    'api' => [
        'regenerate' => 'Régénérer la clé API',
        'revoke'     => 'API-Schlüssel widerrufen',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Dernière heure',
            'hourly'    => 'Les 12 dernières heures',
            'weekly'    => 'Semaine',
            'monthly'   => 'Mois',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Abonnez-vous pour obtenir les dernières mises à jour.',
        'button'    => 'S\'abonner',
        'email'     => [
            'subscribe'          => 'S\'abonner aux notifications par email.',
            'subscribed'         => 'Vous êtes abonné aux notifications par email, veuillez vérifier votre messagerie pour confirmer votre adresse.',
            'verified'           => 'Votre abonnement aux notifications par email a été confirmé. Merci !',
            'unsubscribe'        => 'Désinscription des mises à jour par courriel.',
            'unsubscribed'       => 'Votre abonnement aux notifications par email a été annulé.',
            'failure'            => 'Une erreur est survenue lors de l\'abonnement.',
            'already-subscribed' => 'Impossible de s\'abonner avec l\'adresse e-mail :email car celle-ci est déjà abonné.',
            'verify'             => [
                'text'           => "Veuillez confirmer votre abonnement aux notifications par email de :app_name.\n:link\nMerci, :app_name",
                'html-preheader' => 'Veuillez confirmer votre abonnement aux notifications par email de :app_name.',
                'html'           => '<p>Merci de confirmer votre adresse d\'inscription aux notifications de statut de :app_name</p><p><a href=":link">:link</a></p>
<p>Merci, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Une nouvelle maintenance a été planifiée pour :app_name.\nMerci, :app_name",
                'html-preheader' => 'Une nouvelle maintenance a été planifiée pour :app_name.',
                'html'           => '<p>Une nouvelle maintenance a été planifiée pour :app_name</p>',
            ],
            'incident' => [
                'text'           => "Un nouvel incident a été signalé sur : app_name.\nMerci, :app_name",
                'html-preheader' => 'Un nouvel incident a été signalé sur : app_name.',
                'html'           => '<p>Un nouvel incident a été signalé sur : app_name. </p><p>Merci, : app_name</p>',
            ],
            'component' => [
                'subject'        => 'Mise à jour du statut d\'un composant',
                'text'           => 'Le statut du composant :component_name a été mis à jour. Il est maintenant :component_human_status.\nMerci, :app_name',
                'html-preheader' => 'Mise à jour d\'un composant de :app_name',
                'html'           => '<p>Le statut du composant :component_name a été mis à jour. Il est maintenant :component_human_status.</p><p>Merci, :app_name</p>',
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
        'failure'  => 'Un problème est survenu lors de votre inscription.',
    ],

    'system' => [
        'update' => 'Il y a une nouvelle version de Cachet disponible. Vous pouvez trouver des renseignements concernant la procédure de mise à jour <a href="https://docs.cachethq.io/docs/updating-cachet">ici</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Fermer',
        'subscribe' => [
            'title'  => 'S\'abonner aux mises à jour du status du composant',
            'body'   => 'Entrez votre adresse e-mail pour vous abonner aux mises à jour de ce composant. Si vous êtes déjà abonné, vous recevez déjà des notifications pour ce composant.',
            'button' => 'S\'abonner',
        ],
    ],

    // Other
    'powered_by'      => ':app Page de statut est propulsé par <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'À propos du site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Flux des statuts',

];
