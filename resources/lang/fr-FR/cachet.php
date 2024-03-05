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
        'last_updated' => 'Dernière mise-à-jour le :timestamp',
        'status'       => [
            0 => 'Inconnu',
            1 => 'Opérationnel',
            2 => 'Problèmes de performances',
            3 => 'Panne partielle',
            4 => 'Panne majeure',
        ],
        'group' => [
            'other' => 'Autres services',
        ],
        'select_all'   => 'Tout sélectionner',
        'deselect_all' => 'Tout désélectionner',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Aucun incident signalé',
        'past'         => 'Incidents antérieurs',
        'stickied'     => 'Incidents épinglés',
        'scheduled'    => 'Maintenance planifiée',
        'scheduled_at' => ', planifé le :timestamp',
        'posted'       => 'Signalé :timestamp par :username',
        'posted_at'    => 'Signalé :timestamp',
        'status'       => [
            1 => 'En cours d’investigation',
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
        'good'  => 'Aucun incident signalé',
        'bad'   => 'Incident en cours',
        'major' => 'Incident majeur en cours',
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
        'subscribe'           => 'Être informé des nouveaux signalements d’incidents et changements de statut',
        'unsubscribe'         => 'Se désabonner',
        'button'              => 'S’abonner',
        'manage_subscription' => 'Gérer l’abonnement',
        'manage'              => [
            'notifications'       => 'Notifications',
            'notifications_for'   => 'Gérer les notifications pour',
            'no_subscriptions'    => 'Vous êtes actuellement abonné à toutes les mises-à-jour.',
            'update_subscription' => 'Mettre-à-jour l’abonnement',
            'my_subscriptions'    => 'Vous êtes actuellement abonné aux mises-à-jour suivantes.',
            'manage_at_link'      => 'Gérer vos abonnements à :link',
        ],
        'email' => [
            'manage_subscription' => 'Un courriel vous a été envoyé ; merci de cliquer sur le lien pour gérer votre abonnement',
            'subscribe'           => 'S’abonner aux notifications par courriel.',
            'subscribed'          => 'Vous êtes abonné aux notifications par courriel, veuillez vérifier votre messagerie pour confirmer votre adresse.',
            'updated-subscribe'   => 'Vous avez mis-à-jour vos abonnements avec succès.',
            'verified'            => 'Votre abonnement aux notifications par courriel a été confirmé. Merci !',
            'manage'              => 'Gérer votre abonnement',
            'unsubscribe'         => 'Se désabonner des mises à jour par courriel.',
            'unsubscribed'        => 'Votre abonnement aux notifications par courriel a été annulé.',
            'failure'             => 'Une erreur est survenue lors de l’abonnement.',
            'already-subscribed'  => 'Impossible de s’abonner avec l’adresse mail :email car celle-ci est déjà abonnée.',
        ],
    ],

    'signup' => [
        'title'    => 'Inscription',
        'username' => 'Nom d’utilisateur',
        'email'    => 'Adresse mail',
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
            'title'  => 'S’abonner aux mises-à-jour du statut du service',
            'body'   => 'Entrez votre adresse mail pour vous abonner aux mises-à-jour de ce service. Si vous êtes déjà abonné, vous recevez déjà des notifications pour ce service.',
            'button' => 'S’abonner',
        ],
    ],

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Détails et mises-à-jour sur l’incident :name qui a eu lieu le :date',
            'schedule'  => 'Détails sur la période de maintenance planifiée :name débutant le :startDate',
            'subscribe' => 'S’abonner à :app afin de recevoir les mises-à-jour des incidents et des périodes de maintenance planifiée',
            'overview'  => 'Restez à jour avec les dernières mises-à-jour de :app.',
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
