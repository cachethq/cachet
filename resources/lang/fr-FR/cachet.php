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
        'last_updated' => 'Dernière mise à jour :timestamp',
        'status'       => [
            0 => 'Inconnu',
            1 => 'Opérationnel',
            2 => 'Problèmes de performances',
            3 => 'Panne partielle',
            4 => 'Panne majeure',
        ],
        'group' => [
            'other' => 'Autres composants',
        ],
        'select_all'   => 'Tout sélectionner',
        'deselect_all' => 'Tout désélectionner',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Aucun incident signalé',
        'past'         => 'Incidents antérieurs',
        'stickied'     => 'Incidents épinglés',
        'scheduled'    => 'Maintenance Planifiée',
        'scheduled_at' => ', planifé à :timestamp',
        'posted'       => 'Posted :timestamp by :username',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'Enquête en cours',
            2 => 'Identifié',
            3 => 'Sous surveillance',
            4 => 'Corrigé',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Imminent',
            1 => 'En cours',
            2 => 'Terminé',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Système opérationnel|[2,*] Tous les systèmes sont opérationnels',
        'bad'   => '[0,1] Le système rencontre actuellement des problèmes|[2,Inf] Certains systèmes rencontrent des problèmes',
        'major' => '[0,1]The system is experiencing major issues|[2,*]Some systems are experiencing major issues',
    ],

    'api' => [
        'regenerate' => 'Régénérer la clé API',
        'revoke'     => 'Révoquer la clé API',
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
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Se désabonner',
        'button'              => 'S\'abonner',
        'manage_subscription' => 'Gérer l\'abonnement',
        'manage'              => [
            'notifications'       => 'Notifications',
            'notifications_for'   => 'Gérer les notifications pour',
            'no_subscriptions'    => 'Vous êtes actuellement abonné à toutes les mises à jour.',
            'update_subscription' => 'Mettre à jour l’abonnement',
            'my_subscriptions'    => 'Vous êtes actuellement abonné aux mises à jour suivantes.',
            'manage_at_link'      => 'Gérer vos abonnements à :link',
        ],
        'email' => [
            'manage_subscription' => 'We\'ve sent you an email, please click the link to manage your subscription',
            'subscribe'           => 'S\'abonner aux notifications par email.',
            'subscribed'          => 'Vous êtes abonné aux notifications par email, veuillez vérifier votre messagerie pour confirmer votre adresse.',
            'updated-subscribe'   => 'You\'ve succesfully updated your subscriptions.',
            'verified'            => 'Votre abonnement aux notifications par email a été confirmé. Merci !',
            'manage'              => 'Gérer votre abonnement',
            'unsubscribe'         => 'Désinscription des mises à jour par courriel.',
            'unsubscribed'        => 'Votre abonnement aux notifications par email a été annulé.',
            'failure'             => 'Une erreur est survenue lors de l\'abonnement.',
            'already-subscribed'  => 'Impossible de s\'abonner avec l\'adresse e-mail :email car celle-ci est déjà abonnée.',
        ],
    ],

    'signup' => [
        'title'    => 'Inscription',
        'username' => 'Nom d\'utilisateur',
        'email'    => 'Adresse e-mail',
        'password' => 'Mot de passe',
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

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Détails et mises à jour sur l\'incident :name qui a eu lieu le :date',
            'schedule'  => 'Détails sur la période de maintenance planifiée :name débutant le :startDate',
            'subscribe' => 'S’abonner à :app afin de recevoir les mises à jour des incidents et des périodes de maintenance planifiée',
            'overview'  => 'Restez à jour avec les dernières mises à jour de :app.',
        ],
    ],

    // Other
    'home'            => 'Accueil',
    'powered_by'      => 'Propulsé par <a href="https://cachethq.io">Cachet</a>.',
    'timezone'        => 'Les heures sont affichées avec le fuseau horaire :timezone.',
    'about_this_site' => 'À propos du site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Flux des statuts',

];
