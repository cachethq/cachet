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
            'failure' => 'L\'incident n\'a pas pu être signalé. Veuillez réessayer.',
        ],
        'edit' => [
            'title'   => 'Modifier un incident',
            'success' => 'Incident mis à jour.',
            'failure' => 'L\'incident n\'a pas pu être modifié. Veuillez réessayer.',
        ],
        'delete' => [
            'success' => 'L\'incident a été supprimé et ne sera pas affiché sur votre page de statut.',
            'failure' => 'L\'incident n\'a pas pu être supprimé. Veuillez réessayer.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Modèles d\'incident',
            'add'   => [
                'title'   => 'Créer un modèle d\'incident',
                'message' => 'Vous devriez ajouter un modèle d\'incident.',
                'success' => 'Modèle créé.',
                'failure' => 'Le modèle d\'incident n\'a pas pu être crée. Veuillez réessayer.',
            ],
            'edit' => [
                'title'   => 'Éditer le modèle',
                'success' => 'Le modèle a été mis à jour !',
                'failure' => 'Le modèle d\'incident n\'a pas pu être modifié. Veuillez réessayer.',
            ],
            'delete' => [
                'success' => 'Le modèle d\'incident a été supprimé.',
                'failure' => 'Le modèle d\'incident n\'a pas pu être supprimé. Veuillez réessayer.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Maintenance planifiée',
        'logged'       => '{0} Aucune maintenance en cours, félicitations.|Vous avez une maintenance planifiée.|Vous avez <strong>:count</strong> maintenances planifiées.',
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
            'success' => 'La maintenance planifiée a été supprimée et ne sera pas affichée sur votre page de statut !',
            'failure' => 'La maintenance planifiée n\'a pas pu être supprimée. Veuillez réessayer.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Composants',
        'component_statuses' => 'Statut des composants',
        'listed_group'       => 'Groupés par :nom',
        'add'                => [
            'title'   => 'Ajouter un composant',
            'message' => 'Vous devez ajouter un composant.',
            'success' => 'Composant créé.',
            'failure' => 'Une erreur est survenue avec le composant.',
        ],
        'edit' => [
            'title'   => 'Modifier un composant',
            'success' => 'Composant mis à jour.',
            'failure' => 'Le composant n\'a pas pu être mis à jour. Veuillez réessayer.',
        ],
        'delete' => [
            'success' => 'Le composant a été supprimé !',
            'failure' => 'Le composant n\'a pas pu être supprimé. Veuillez réessayer.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Groupe de composants|Groupes de composants',
            'no_components' => 'Vous devez ajouter un groupe de composants.',
            'add'           => [
                'title'   => 'Ajouter un groupe de composants',
                'success' => 'Le groupe de composants a été ajouté !',
                'failure' => 'Une erreur est survenue avec le groupe de composants.',
            ],
            'edit' => [
                'title'   => 'Modifier un groupe de composants',
                'success' => 'Le groupe de composants a été mis à jour !',
                'failure' => 'Le groupe de composants n\'a pas pu être modifié. Veuillez réessayer.',
            ],
            'delete' => [
                'success' => 'Le groupe de composants a été supprimé !',
                'failure' => 'Le groupe de composants n\'a pas pu être supprimé. Veuillez réessayer.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Indicateur',
        'add'     => [
            'title'   => 'Créer une métrique',
            'message' => 'Vous devez ajouter un indicateur.',
            'success' => 'L\'indicateur a été ajouté !',
            'failure' => 'Un problème est survenu avec cette métrique.',
        ],
        'edit' => [
            'title'   => 'Modifier une métrique',
            'success' => 'Métrique mise à jour.',
            'failure' => 'Un problème est survenu avec cette métrique.',
        ],
        'delete' => [
            'success' => 'La métrique a été supprimé et ne sera plus visible sur votre page de statut.',
            'failure' => 'La métrique n\'a pas pu être supprimé. Veuillez réessayer.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Abonnés',
        'description'  => 'Les abonnés reçoivent des notifications par e-mail lorsque des incidents sont créés.',
        'verified'     => 'Vérifié',
        'not_verified' => 'Non vérifié',
        'add'          => [
            'title'   => 'Ajouter un abonné',
            'success' => 'L\'abonné a été ajouté !',
            'failure' => 'L\'abonné n\'a pas pu être ajouté. Veuillez réessayer.',
        ],
        'edit' => [
            'title'   => 'Mettre à jour l\'abonné',
            'success' => 'L\'abonné a été mis à jour !',
            'failure' => 'L\'abonné n\'a pas pu être mis à jour. Veuillez réessayer.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Équipe',
        'member'      => 'Membre',
        'profile'     => 'Profil utilisateur',
        'description' => 'Les membres de l\'équipe pourront ajouter &amp; modifier les composants et les incidents.',
        'add'         => [
            'title'   => 'Ajouter un nouveau membre de l\'équipe',
            'success' => 'Un membre à été ajouté à l\'équipe !',
            'failure' => 'Une erreur est survenue avec le composant.',
        ],
        'edit' => [
            'title'   => 'Mettre le profil à jour',
            'success' => 'Le membre de l\'équipe a été mis à jour !',
            'failure' => 'Le membre de l\'équipe n\'a pas pu être mis à jour. Veuillez réessayer.',
        ],
        'delete' => [
            'success' => 'Le membre de l\'équipe a été supprimé et n\'aura plus l\'accès au tableau de bord !',
            'failure' => 'Le membre de l\'équipe n\'a pas pu être supprimé. Veuillez réessayer.',
        ],
        'invite' => [
            'title'   => 'Inviter un nouveau membre de l\'équipe',
            'success' => 'Nouveau membre invité.',
            'failure' => 'L\'invitation n\'a pas pu être envoyé. Veuillez réessayer.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Paramètres',
        'app-setup' => [
            'app-setup'   => 'Configuration de l\'application',
            'images-only' => 'Seules les images peuvent être envoyées.',
            'too-big'     => 'Le fichier envoyé est trop grand. Envoyer une image d\'une taille inférieur à :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localisation',
        ],
        'security' => [
            'security'   => 'Sécurité',
            'two-factor' => 'Utilisateurs sans authentification à deux facteurs',
        ],
        'stylesheet' => [
            'stylesheet' => 'Feuille de style',
        ],
        'theme' => [
            'theme' => 'Thème',
        ],
        'edit' => [
            'success' => 'Paramètres sauvegardés.',
            'failure' => 'Les paramètres n\'ont pas pu être sauvegardés.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Connexion',
        'logged_in'  => 'Vous êtes connecté.',
        'welcome'    => 'Re-bonjour !',
        'two-factor' => 'Veuillez entrer votre jeton.',
    ],

    // Sidebar footer
    'help'        => 'Aide',
    'status_page' => 'Page de statut',
    'logout'      => 'Déconnexion',

    // Notifications
    'notifications' => [
        'notifications' => 'Notifications',
        'awesome'       => 'Fantastique.',
        'whoops'        => 'Oups.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Bienvenue sur votre page de statut !',
        'message' => 'Votre page de statut est presque prête ! Vous voudrez peut-être configurer ces paramètres supplémentaires',
        'close'   => 'Aller directement à mon tableau de bord',
        'steps'   => [
            'component'  => 'Créer des composants',
            'incident'   => 'Créer des incidents',
            'customize'  => 'Personnaliser',
            'team'       => 'Ajouter des utilisateurs',
            'api'        => 'Générer un jeton API',
            'two-factor' => 'Authentification à deux facteurs',
        ],
    ],

];
