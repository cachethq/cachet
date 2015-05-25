<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard' => 'Tableau de bord',

    // Incidents
    'incidents' => [
        'incidents'                => 'Incidents',
        'logged'                   => '{0} Il n\'y a aucun incident, bien joué !|Vous avez reporté un incident.|Vous avez reporté <strong>:count</strong> incidents.',
        'incident-create-template' => 'Créer un modèle',
        'incident-templates'       => 'Modèles d\'incident',
        'add'                      => [
            'title'   => 'Ajouter un incident',
            'success' => 'Incident ajouté.',
            'failure' => 'Une erreur s\'est produite lors de l\'ajout de cet incident.',
        ],
        'edit' => [
            'title'   => 'Éditer un incident',
            'success' => 'Incident mis-à-jour.',
            'failure' => 'Une erreur s\'est produite lors de la mise à jour de cet incident.',
        ],

        // Incident templates
        'templates' => [
            'add' => [
                'title'   => 'Créer un modèle d\'incident',
                'success' => 'Modèle créé.',
                'failure' => 'Une erreur s\'est produite lors de l\'ajout de ce modèle d\'incident.',
            ],
            'edit' => [
                'title'   => 'Modifier un modèle',
                'success' => 'Modèle mis à jour.',
                'failure' => 'Une erreur s\'est produite lors de la mise à jour du modèle.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Maintenance planifiée',
        'scheduled_at' => 'Prévue à :timestamp',
        'add'          => [
            'title'   => 'Ajouter une maintenance planifiée',
            'success' => 'Maintenance ajoutée.',
            'failure' => 'Une erreur s\'est produite lors de l\'ajout de la maintenance.',
        ],
        'edit' => [
            'title'   => 'Éditer la maintenance',
            'success' => 'Maintenance mise à jour!',
            'failure' => 'Une erreur s\'est produite lors de la modification de la maintenance.',
        ],
        'delete' => [
            'success' => 'La maintenance a été effacée et ne s\'affihera plus..',
            'failure' => 'La maintenance n\'a pu être effacée. Veuillez essayez de nouveau.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Composantes',
        'component_statuses' => 'Statut des composantes',
        'add'                => [
            'title'   => 'Créer une composante',
            'message' => 'Commencez par ajouter une composante.',
            'success' => 'Composante créée.',
            'failure' => 'Une erreur s\'est produite lors de l\'ajout de cette composante.',
        ],
        'edit' => [
            'title'   => 'Éditer une composante',
            'success' => 'Composant mis-à-jour.',
            'failure' => 'Une erreur s\'est produite lors de la mise à jour de cette composante.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Groupe de composantes',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Ajouter un group de composantes',
                'success' => 'Groupe de composantes ajouté.',
                'failure' => 'Une erreur s\'est produite lors de l\'ajout de ce groupe de composantes.',
            ],
            'edit' => [
                'title'   => 'Éditer un groupe de composantes',
                'success' => 'Groupe de composantes mis-à-jour.',
                'failure' => 'Une erreur s\'est produite lors de la mise à jour de ce groupe de composantes.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Point de mesure',
        'add'     => [
            'title'   => 'Créer un point de mesure',
            'success' => 'Point de mesure créé.',
            'failure' => 'Il s\'est passé quelque chose avec ce point de mesure.',
        ],
        'edit' => [
            'title'   => 'Éditer un point de mesure',
            'success' => 'Point de mesure mis-à-jour.',
            'failure' => 'Il s\'est passé quelque chose avec ce point de mesure.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Équipe',
        'member'      => 'Membre',
        'profile'     => 'Profil',
        'description' => 'Les membres de l\'équipe pourrons ajouter, modifier &amp; éditer les composantes et incidents.',
        'add'         => [
            'title'   => 'Ajouter un membre à l\'équipe',
            'success' => 'Membre ajouté.',
            'failure' => 'Une erreur s\'est produite lors de l\'ajout de ce membre.',
        ],
        'edit'        => [
            'title'   => 'Mettre à jour le profil',
            'success' => 'Profil mis-à-jour.',
            'failure' => 'Une erreur s\'est produite lors de la mise à jour du le profil.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'   => 'Réglages',
        'app-setup'  => [
            'app-setup'   => 'Configuration',
            'images-only' => 'Only images may be uploaded.',
            'too-big'     => 'The file you uploaded is too big. Upload an image smaller than :size',
        ],
        'security' => [
            'security' => 'Sécurité',
        ],
        'stylesheet' => [
            'stylesheet' => 'Feuille de style',
        ],
        'theme' => [
            'theme' => 'Thème',
        ],
        'edit' => [
            'success' => 'Réglages sauvegardés.',
            'failure' => 'Les réglages n\'ont pas pu être sauvegardés.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Connexion',
        'logged_in'  => 'Vous êtes connecté.',
        'welcome'    => 'Re-bonjour !',
        'two-factor' => 'Entrez votre jeton d\'identification.',
    ],

    // Sidebar footer
    'help'        => 'Aide',
    'status_page' => 'Statut des services',
    'logout'      => 'Déconnexion',

    // Notifications
    'notifications'     => [
        'notifications' => 'Notifications',
        'awesome'       => 'Super.',
        'whoops'        => 'Oups.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Bienvenue dans Cachet',
        'message' => 'Votre page d\'état est presque prête! Vous voudrez probablement configurer ces réglages supplémentaires',
        'close'   => 'Aller directement au tableau de bord',
        'steps'   => [
            'component'  => 'Créer une composante',
            'incident'   => 'Créer un incident',
            'customize'  => 'Configurer votre Cachet.',
            'team'       => 'Ajouter des utilisateurs à votre équipe.',
            'api'        => 'Générer un jeton d\'identification API.',
            'two-factor' => 'Activer l\'identification à deux étapes.',
        ],
    ],

];
