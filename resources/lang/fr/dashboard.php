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

    'dashboard' => 'Tableau de bord',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidents &amp; Planification',
        'incidents'                => 'Incidents',
        'logged'                   => '{0} Aucun incident, bon travail.|Vous avez un incident signalé.|Vous avez  <strong>:count</strong> incidents signalés.',
        'incident-create-template' => 'Créer un modèle',
        'incident-templates'       => 'Modèles d\'incident',
        'add'                      => [
            'title'   => 'Ajouter un incident',
            'success' => 'Incident ajouté.',
            'failure' => 'Quelque chose n\'allait pas avec l\'incident.',
        ],
        'edit' => [
            'title'   => 'Modifier un incident',
            'success' => 'Incident mis à jour.',
            'failure' => 'Une erreur est survenue avec l\'incident.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Modèles d\'incident',
            'add'   => [
                'title'   => 'Créer un modèle d\'incident',
                'success' => 'Modèle créé.',
                'failure' => 'Une erreur est survenue avec le modèle d\'incident.',
            ],
            'edit' => [
                'title'   => 'Editer le Template',
                'success' => 'Le modèle a été mis à jour !',
                'failure' => 'Une erreur est survenue avec la mise à jour le modèle d\'incident',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Maintenance planifiée',
        'scheduled_at' => 'Planifiée à :timestamp',
        'add'          => [
            'title'   => 'Ajouter une maintenance planifiée',
            'success' => 'Planification ajoutée.',
            'failure' => 'Une erreur est survenue lors de l\'ajout de la planification.',
        ],
        'edit' => [
            'title'   => 'Modifier la maintenance planifiée',
            'success' => 'La planification a été mise à jour !',
            'failure' => 'Une erreur est survenue lors de l\'édition de la planification.',
        ],
        'delete' => [
            'success' => 'Cette planification a été supprimée et ne sera pas affichée sur votre page de statut.',
            'failure' => 'Cette planification n\'a pas pu être supprimée. Veuillez réessayer.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Composants',
        'component_statuses' => 'Statuts des composant',
        'listed_group'       => 'Groupés dans : nom',
        'add'                => [
            'title'   => 'Ajouter un composant',
            'message' => 'Vous devez ajouter un composant.',
            'success' => 'Composant créé.',
            'failure' => 'Une erreur est survenue avec le composant.',
        ],
        'edit' => [
            'title'   => 'Modifier un composant',
            'success' => 'Composant mis à jour.',
            'failure' => 'Une erreur est survenue avec le composant.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Groupes de composants',
            'no_components' => 'Vous devez ajouter un groupe de composants.',
            'add'           => [
                'title'   => 'Ajouter un groupe de composants',
                'success' => 'Groupe composant ajouté.',
                'failure' => 'Une erreur est survenue avec le groupe de composants.',
            ],
            'edit' => [
                'title'   => 'Modifier un groupe de composants',
                'success' => 'Groupe de composants mis à jour.',
                'failure' => 'Un problème est survenu avec le groupe de composants.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Métriques',
        'add'     => [
            'title'   => 'Créer un indicateur',
            'success' => 'Métrique créé.',
            'failure' => 'Un problème est survenu avec cet indicateur.',
        ],
        'edit' => [
            'title'   => 'Modifier un indicateur',
            'success' => 'Indicateur mise à jour.',
            'failure' => 'Un problème est survenu avec cet indicateur.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Abonnés',
        'description'  => 'Les abonnés receveront un courriel lors de la création d\'incident.',
        'verified'     => 'Vérifié',
        'not_verified' => 'Non vérifié',
        'add'          => [
            'title'   => 'Ajouter un abonné',
            'success' => 'Abonné ajouté.',
            'failure' => 'Une erreur est survenue avec le composant.',
        ],
        'edit' => [
            'title'   => 'Mettre à jour un abonné',
            'success' => 'Abonné mis à jour.',
            'failure' => 'Une erreur est survenue lors de l\'actualisation.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Equipe',
        'member'      => 'Utilisateur',
        'profile'     => 'Profil utilisateur',
        'description' => 'Membres de l\'équipe sera en mesure d\'ajouter, de modifier et de modifier les composants et les incidents.',
        'add'         => [
            'title'   => 'Ajouter un nouveau membre de l\'équipe',
            'success' => 'Membre de l\'équipe a ajouté.',
            'failure' => 'Une erreur est survenue avec le composant.',
        ],
        'edit' => [
            'title'   => 'Mettre le Profil à Jour',
            'success' => 'Profil mis à jour.',
            'failure' => 'Une erreur est survenue lors de l\'actualisation.',
        ],
        'delete' => [
            'success' => 'Profil supprimé',
            'failure' => 'Une erreur est survenue lors de la suppression.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Paramètres',
        'app-setup' => [
            'app-setup'   => 'Configuration de l\'application',
            'images-only' => 'Seules les images peuvent être déposées.',
            'too-big'     => 'Le fichier déposé est trop grand. Déposer une image d\'une taille inférieur à :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'security' => [
            'security'   => 'Sécurité',
            'two-factor' => 'Utilisateurs sans authentification à deux facteurs',
        ],
        'stylesheet' => [
            'stylesheet' => 'Feuille de style',
        ],
        'theme' => [
            'theme' => ' Thème',
        ],
        'edit' => [
            'success' => 'Paramètres sauvegardés.',
            'failure' => 'Les paramètres ne peuvent pas être sauvegardés.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Identifiez-vous',
        'logged_in'  => 'Vous êtes connecté.',
        'welcome'    => 'Re-bonjour !',
        'two-factor' => 'Entrez votre jeton, s\'il vous plait.',
    ],

    // Sidebar footer
    'help'        => 'Aide',
    'status_page' => 'État des services',
    'logout'      => 'Se déconnecter',

    // Notifications
    'notifications' => [
        'notifications' => 'Notifications',
        'awesome'       => 'Fantastique.',
        'whoops'        => 'Oups.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Bienvenue sur Cachet',
        'message' => 'Votre page de statut est presque prêt ! Vous pouvez configurer ces paramètres supplémentaires',
        'close'   => 'Il suffit d\'aller directement à mon tableau de bord',
        'steps'   => [
            'component'  => 'Créer des composants',
            'incident'   => 'Créer des incidents',
            'customize'  => 'Personnaliser',
            'team'       => 'Ajouter des utilisateurs',
            'api'        => 'Générer un jeton pour l\'API',
            'two-factor' => 'Authentification à deux facteurs',
        ],
    ],

];
