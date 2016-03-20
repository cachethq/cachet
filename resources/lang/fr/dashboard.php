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
            'success' => 'Incident added.',
            'failure' => 'There was an error adding the incident, please try again.',
        ],
        'edit' => [
            'title'   => 'Modifier un incident',
            'success' => 'Incident mis à jour.',
            'failure' => 'There was an error editing the incident, please try again.',
        ],
        'delete' => [
            'success' => 'L\'incident a été supprimé et ne sera pas affiché sur votre page de statut.',
            'failure' => 'The incident could not be deleted, please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Modèles d\'incident',
            'add'   => [
                'title'   => 'Créer un modèle d\'incident',
                'message' => 'Vous devriez ajouter un modèle d\'incident.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'Éditer le modèle',
                'success' => 'The incident template has been updated.',
                'failure' => 'Something went wrong updating the incident template',
            ],
            'delete' => [
                'success' => 'Le modèle d\'incident a été supprimé.',
                'failure' => 'The incident template could not be deleted, please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Maintenance planifiée',
        'logged'       => '{0} Aucune maintenance en cours, félicitations.|Vous avez une maintenance planifiée.|Vous avez <strong>:count</strong> maintenances planifiées.',
        'scheduled_at' => 'Planifiée à :timestamp',
        'add'          => [
            'title'   => 'Add Scheduled Maintenance',
            'success' => 'Schedule added.',
            'failure' => 'Something went wrong adding the schedule, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Scheduled Maintenance',
            'success' => 'Schedule has been updated!',
            'failure' => 'Something went wrong editing the schedule, please try again.',
        ],
        'delete' => [
            'success' => 'The scheduled maintenance has been deleted and will not show on your status page.',
            'failure' => 'The scheduled maintenance could not be deleted, please try again.',
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
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'edit' => [
            'title'   => 'Modifier un composant',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'delete' => [
            'success' => 'Le composant a été supprimé !',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Groupe de composants|Groupes de composants',
            'no_components' => 'Vous devez ajouter un groupe de composants.',
            'add'           => [
                'title'   => 'Ajouter un groupe de composants',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => 'Modifier un groupe de composants',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => 'Le groupe de composants a été supprimé !',
                'failure' => 'The component group could not be deleted, please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Indicateur',
        'add'     => [
            'title'   => 'Créer une métrique',
            'message' => 'Vous devez ajouter un indicateur.',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Modifier une métrique',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'La métrique a été supprimé et ne sera plus visible sur votre page de statut.',
            'failure' => 'The metric could not be deleted, please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Abonnés',
        'description'      => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'verified'         => 'Vérifié',
        'not_verified'     => 'Non vérifié',
        'subscriber'       => ':email, subscribed :date',
        'no_subscriptions' => 'Subscribed to all updates',
        'add'              => [
            'title'   => 'Ajouter un abonné',
            'success' => 'L\'abonné a été ajouté !',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
        ],
        'edit' => [
            'title'   => 'Mettre à jour l\'abonné',
            'success' => 'L\'abonné a été mis à jour !',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
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
            'success' => 'Team member added.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'edit' => [
            'title'   => 'Mettre le profil à jour',
            'success' => 'Profile updated.',
            'failure' => 'Something went wrong updating the profile, please try again.',
        ],
        'delete' => [
            'success' => 'Le membre de l\'équipe a été supprimé et n\'aura plus l\'accès au tableau de bord !',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'invite' => [
            'title'   => 'Inviter un nouveau membre de l\'équipe',
            'success' => 'Nouveau membre invité.',
            'failure' => 'The invite could not be sent, please try again.',
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
        'customization' => [
            'customization' => 'Customization',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
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
        'close'   => 'Take me straight to my dashboard',
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
