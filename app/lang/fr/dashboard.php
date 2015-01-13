<?php

return [

    'dashboard' => 'Tableau de bord',

    // Incidents
    'incidents' => [
        'incidents'                => 'Incidents',
        'logged'                   => '{0} Il n\'y a aucun incident, bien joué !|Vous avez reporté un incident.|Vous avez reporté <strong>:count</strong> incidents.',
        'incident-create-template' => 'Créer un modèle',
        'add'                      => [
            'title'   => 'Ajouter un incident',
            'success' => 'Incident ajouté.',
            'failure' => 'Il s\'est passé quelque chose avec cet incident.',
        ],
        'edit' => [
            'title'   => 'Éditer un incident',
            'success' => 'Incident mis-à-jour.',
            'failure' => 'Il s\'est passé quelque chose avec cet incident.',
        ],

        // Incident templates
        'templates' => [
            'add' => [
                'title'   => 'Créer un modèle d\'incident',
                'success' => 'Modèle créé.',
                'failure' => 'Il s\'est passé quelque chose avec ce modèle d\'incident.',
            ],
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Composant|Composants',
        'component_statuses' => 'Statut des composants',
        'add'                => [
            'title'   => 'Créer un composant',
            'message' => 'Commencez par ajouter un composant.',
            'success' => 'Composant créé.',
            'failure' => 'Il s\'est passé quelque chose avec ce composant.',
        ],
        'edit' => [
            'title'   => 'Éditer un composant',
            'success' => 'Composant mis-à-jour.',
            'failure' => 'Il s\'est passé quelque chose avec ce composant.',
        ],

        // Component groups
        'groups' => [
            'groups' => 'Groupe de composants|Groupes de composants',
            'add'    => [
                'title'   => 'Ajouter un group de composants',
                'success' => 'Groupe de composants ajouté.',
                'failure' => 'Il s\'est passé quelque chose avec ce composantgroupe de composants.',
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
    ],

    // Team
    'team' => [
        'team'        => 'Équipe',
        'member'      => 'Membre',
        'profile'     => 'Profil',
        'description' => 'Les membres de l\'équipe pourrons ajouter, modifier &amp; éditer les composants et incidents.',
        'add'         => [
            'title'   => 'Ajouter un membre à l\'équipe',
            'success' => 'Membre ajouté.',
            'failure' => 'Il s\'est passé quelque chose avec ce membre.',
        ],
        'edit'        => [
            'title'   => 'Mettre à jour le profil',
            'success' => 'Profil mis-à-jour.',
            'failure' => 'Il s\'est passé quelque chose en mettant à jour le profil.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'   => 'Réglages',
        'app-setup'  => [
            'app-setup'   => 'Configuration',,
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
        'logged_in'  => "Vous êtes connecté.",
        'welcome'    => 'Re-bonjour !',
        'two-factor' => 'Please enter your token.',
    ],

    // Sidebar footer
    'help'        => 'Aide',
    'status_page' => 'Statut des services',
    'logout'      => 'Déconnexion',

    // Notifications
    'notifications'     => [
        'notifications' => 'Notifications',
        'awesome'       => 'Cool.',
        'whoops'        => 'Oups.',
    ],

];
