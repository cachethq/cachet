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

    'dashboard'          => 'Tableau de bord',
    'writeable_settings' => 'Le dossier des paramètres de Cachet n’est pas accessible en écriture. Veuillez vous assurer que le serveur web peut écrire dans <code>./bootstrap/cachet</code>.',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidents & Maintenances',
        'incidents'                => 'Incidents',
        'logged'                   => '{0}Il n’y a aucun incident, bon travail.|[1]Vous avez reporté un incident.|[2,*]Vous avez reporté <strong>:count</strong> incidents.',
        'incident-create-template' => 'Créer un modèle',
        'incident-templates'       => 'Modèles d’incident',
        'updates'                  => [
            'title'   => 'Mises-à-jour d’incident pour :incident',
            'count'   => '{0}aucune|[1]une mise-à-jour|[2]deux mises-à-jour|[3,*]plusieurs mises-à-jour',
            'add'     => [
                'title'   => 'Créer une mise à jour d’incident',
                'success' => 'Votre nouvelle mise-à-jour d’incident a été créée.',
                'failure' => 'Un problème est survenu avec la mise-à-jour d’incident.',
            ],
            'edit' => [
                'title'   => 'Modifier la mise-à-jour d’incident',
                'success' => 'La mise-à-jour d’incident a été modifiée.',
                'failure' => 'Un problème est survenu avec la modification de la mise-à-jour d’incident.',
            ],
        ],
        'reported_by'              => 'Signalé :timestamp par :user',
        'add'                      => [
            'title'   => 'Ajouter un incident',
            'success' => 'Incident ajouté.',
            'failure' => 'Une erreur s’est produite en ajoutant l’incident, veuillez réessayer.',
        ],
        'edit' => [
            'title'   => 'Modifier un incident',
            'success' => 'Incident modifié.',
            'failure' => 'Une erreur s’est produite en modifiant l’incident, veuillez réessayer.',
        ],
        'delete' => [
            'success' => 'L’incident a été supprimé et ne sera pas affiché sur votre page de statut.',
            'failure' => 'L’incident n’a pas pu être supprimé. Veuillez réessayer.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Modèles d’incident',
            'add'   => [
                'title'   => 'Créer un modèle d’incident',
                'message' => 'Créer votre premier modèle d’incident.',
                'success' => 'Votre nouveau modèle d’incident a été créé.',
                'failure' => 'Une erreur est survenue avec le modèle d’incident.',
            ],
            'edit' => [
                'title'   => 'Éditer le modèle',
                'success' => 'Le modèle d’incident a été mis-à-jour.',
                'failure' => 'Une erreur est survenue lors de la mise-à-jour du modèle d’incident',
            ],
            'delete' => [
                'success' => 'Le modèle d’incident a été supprimé.',
                'failure' => 'Le modèle d’incident n’a pas pu être supprimé. Veuillez réessayer.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Maintenances planifiées',
        'logged'       => '{0}Il n’y a aucune maintenance, bon travail.|[1]Vous avez reporté une maintenance.|[2,*]Vous avez reporté <strong>:count</strong> maintenances.',
        'scheduled_at' => 'Planifiée le :timestamp',
        'add'          => [
            'title'   => 'Ajouter une maintenance',
            'success' => 'Maintenance ajoutée.',
            'failure' => 'Un problème est survenu avec l’ajout de la maintenance. Veuillez réessayer.',
        ],
        'edit' => [
            'title'   => 'Modifier la maintenance',
            'success' => 'La maintrnance a été modifiée !',
            'failure' => 'Un problème est survenu avec la modification de la maintenance. Veuillez réessayer.',
        ],
        'delete' => [
            'success' => 'TLa maitenance a été supprimée et de s’affichera plus sur la page de statut.',
            'failure' => 'Un problème est survenu avec la suppression de la maintenance. Veuillez réessayer.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Services',
        'component_statuses' => 'Statut des services',
        'listed_group'       => 'Groupé par :name',
        'add'                => [
            'title'   => 'Ajouter un service',
            'message' => 'Vous devez ajouter un service.',
            'success' => 'Service créé.',
            'failure' => 'Un problème est survenu avec la création du service. Veuillez réessayer.',
        ],
        'edit' => [
            'title'   => 'Modifier un service',
            'success' => 'Service modifié.',
            'failure' => 'Un problème est survenu avec la modification du service. Veuillez réessayer.',
        ],
        'delete' => [
            'success' => 'Le service a été supprimé !',
            'failure' => 'Un problème est survenu avec la suppression du service. Veuillez réessayer.',
        ],

        // Component groups
        'groups' => [
            'groups'        => '[0,1]Groupe de services|[2,*]Groupes de services',
            'no_components' => 'Vous devez ajouter un groupe de services.',
            'add'           => [
                'title'   => 'Ajouter un groupe de services',
                'success' => 'Groupe de services ajouté.',
                'failure' => 'Un problème est survenu avec l’ajout du groupe de services. Veuillez réessayer.',
            ],
            'edit' => [
                'title'   => 'Modifier un groupe de services',
                'success' => 'Groupe de services modifié.',
                'failure' => 'Un problème est survenu avec la modification du groupe de services. Veuillez réessayer.',
            ],
            'delete' => [
                'title'   => 'Supprimer le groupe de services',
                'success' => 'Le groupe de services a été supprimé !',
                'failure' => 'Un problème est survenu avec la suppression du groupe de services. Veuillez réessayer.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Indicateurs',
        'add'     => [
            'title'   => 'Créer une métrique',
            'message' => 'Vous devez ajouter un indicateur.',
            'success' => 'Indicateur créé.',
            'failure' => 'Une erreur est survenue avec l’ajout de l’indicateur. Veuillez réessayer.',
        ],
        'edit' => [
            'title'   => 'Modifier une métrique',
            'success' => 'Indicateur modifié.',
            'failure' => 'Une erreur est survenue avec la modification de l’indicateur. Veuillez réessayer.',
        ],
        'delete' => [
            'success' => 'La métrique a été supprimé et ne sera plus visible sur votre page de statut.',
            'failure' => 'Une erreur est survenue avec la suppression de l’indicateur. Veuillez réessayer.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => 'Abonnés',
        'description'          => 'Les abonnés recevront des notifications par courriel lorsque des incidents sont créés ou des services sont mis-à-jour.',
        'description_disabled' => 'Pour utiliser cette fonction, vous devez autoriser l’abonnement aux notifications.',
        'verified'             => 'Vérifié',
        'not_verified'         => 'Non vérifié',
        'subscriber'           => ':email, abonné le :date',
        'no_subscriptions'     => 'Aucun abonnement',
        'global'               => 'Abonné à tout',
        'add'                  => [
            'title'   => 'Ajouter un abonné',
            'success' => 'L’abonné a été ajouté !',
            'failure' => 'Une erreur s’est produite lors de l’ajout de l’abonné. Veuillez réessayer.',
            'help'    => 'Saisissez un abonné par ligne.',
        ],
        'edit' => [
            'title'   => 'Modifier l’abonné',
            'success' => 'L’abonné a été modifié !',
            'failure' => 'Une erreur s’est produite lors de la modification de l’abonné. Veuillez réessayer.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Équipe',
        'member'      => 'Membre',
        'profile'     => 'Profil utilisateur',
        'description' => 'Les membres de l’équipe pourront ajouter & modifier les services et les incidents.',
        'add'         => [
            'title'   => 'Ajouter un nouveau membre à l’équipe',
            'success' => 'Membre d’équipe a ajouté.',
            'failure' => 'Le membre n’a pas pu être ajouté à l’équipe. Veuillez réessayer.',
        ],
        'edit' => [
            'title'   => 'Modifier le profil',
            'success' => 'Profil modifié.',
            'failure' => 'Une erreur s’est produite lors de la modification du profil. Veuillez réessayer.',
        ],
        'delete' => [
            'success' => 'Le membre été supprimé de l’équipe et n’aura plus l’accès au tableau de bord !',
            'failure' => 'Le membre n’a pas pu être supprimé de l’équipe. Veuillez réessayer.',
        ],
        'invite' => [
            'title'   => 'Inviter un nouveau membre dans l’équipe',
            'success' => 'Nouveau membre invité.',
            'failure' => 'L’invitation n’a pas pu être envoyé. Veuillez réessayer.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Paramètres',
        'app-setup' => [
            'app-setup'   => 'Configuration de l’application',
            'images-only' => 'Seules les images peuvent être envoyées.',
            'too-big'     => 'Le fichier envoyé est trop grand. Envoyer une image d’une taille inférieur à :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'log' => [
            'log' => 'Journal',
        ],
        'localization' => [
            'localization' => 'Localisation',
        ],
        'customization' => [
            'customization' => 'Personnalisation',
            'header'        => 'Entête HTML personnalisé',
            'footer'        => 'Pied-de-page HTML personnalisé',
        ],
        'mail' => [
            'mail'  => 'Courriel',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Tester la notification depuis Cachet',
                'body'    => 'Ceci est une notification de test depuis Cachet.',
            ],
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
            'failure' => 'Les paramètres n’ont pas pu être sauvegardés.',
        ],
        'credits' => [
            'credits'       => 'Crédits',
            'contributors'  => 'Contributeurs',
            'license'       => 'Cachet est un logiciel libre sous licence BSD-3 édité par <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Partenaires financiers et sponsors',
            'backers'       => 'Si vous souhaitez aider des développements futurs jetez un œil à la campagne <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a>.',
            'thank-you'     => 'Merci à chacun des :count contributeurs.',
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

    // Widgets
    'widgets' => [
        'support'          => 'Soutenez Cachet',
        'support_subtitle' => 'Jetez un œil à la page <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong>!',
        'news'             => 'Dernières actualités',
        'news_subtitle'    => 'Obtenez les dernières mises à jour',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Bienvenue sur votre page de statut !',
        'message' => 'Votre page de statut est presque prête ! Vous voudrez peut-être configurer ces paramètres supplémentaires',
        'close'   => 'Aller directement à mon tableau de bord',
        'steps'   => [
            'component'  => 'Créer des services',
            'incident'   => 'Créer des incidents',
            'customize'  => 'Personnaliser',
            'team'       => 'Ajouter des utilisateurs',
            'api'        => 'Générer un jeton API',
            'two-factor' => 'Authentification à deux facteurs',
        ],
    ],

];
