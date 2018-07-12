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

    // Setup form fields
    'setup' => [
        'email'            => 'Adresse e-mail',
        'username'         => 'Nom d\'utilisateur',
        'password'         => 'Mot de passe',
        'site_name'        => 'Nom du site',
        'site_domain'      => 'Nom de domaine du site',
        'site_timezone'    => 'Choisissez votre fuseau horaire',
        'site_locale'      => 'Sélectionner votre langue',
        'enable_google2fa' => 'Activer l\'authentification à deux facteurs de Google',
        'cache_driver'     => 'Gestionnaire de cache',
        'queue_driver'     => 'Pilote de fil',
        'session_driver'   => 'Gestionnaire de session',
        'mail_driver'      => 'Gestionnaire de mail',
        'mail_host'        => 'Serveur de mail',
        'mail_address'     => 'Adresse de l\'expéditeur du mail',
        'mail_username'    => 'Nom d\'utilisateur de mail',
        'mail_password'    => 'Mot de passe du serveur de mail',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Nom d\'utilisateur ou e-mail',
        'email'         => 'Adresse e-mail',
        'password'      => 'Mot de passe',
        '2fauth'        => 'Code d\'authentification',
        'invalid'       => 'Nom d\'utilisateur ou mot de passe incorrect',
        'invalid-token' => 'Jeton invalide',
        'cookies'       => 'Vous devez activer les cookies pour vous connecter.',
        'rate-limit'    => 'Limite de tentatives atteinte.',
        'remember_me'   => 'Se souvenir de moi',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nom',
        'status'             => 'Statut',
        'component'          => 'Composant',
        'component_status'   => 'Component Status',
        'message'            => 'Message',
        'message-help'       => 'Vous pouvez également utiliser le format Markdown.',
        'occurred_at'        => 'Quand s\'est produit cet incident ?',
        'notify_subscribers' => 'Notifier les abonnés ?',
        'notify_disabled'    => 'Due to scheduled maintenance, notifications about this incident or its components will be suppressed.',
        'visibility'         => 'Visibilité de l\'incident',
        'stick_status'       => 'Incident épinglé',
        'stickied'           => 'Épinglé',
        'not_stickied'       => 'Non épinglé',
        'public'             => 'Visible par le public',
        'logged_in_only'     => 'Uniquement visible par les utilisateurs enregistrés',
        'templates'          => [
            'name'     => 'Nom',
            'template' => 'Modèle',
            'twig'     => 'Vous pouvez utiliser <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> pour créer des modèles par langues pour les modèles d\'incidents.',
        ],
    ],

    'schedules' => [
        'name'         => 'Nom',
        'status'       => 'Statut',
        'message'      => 'Message',
        'message-help' => 'Vous pouvez également utiliser le format Markdown.',
        'scheduled_at' => 'Pour quand la maintenance est-elle planifiée ?',
        'completed_at' => 'Quand est-ce que cette maintenance sera terminée ?',
        'templates'    => [
            'name'     => 'Nom',
            'template' => 'Modèle',
            'twig'     => 'Vous pouvez utiliser <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> pour créer des modèles par langues pour les modèles d\'incidents.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nom',
        'status'      => 'Statut',
        'group'       => 'Groupe',
        'description' => 'Description',
        'link'        => 'Lien',
        'tags'        => 'Mots-clés',
        'tags-help'   => 'Séparés par des virgules.',
        'enabled'     => 'Activer le composant ?',

        'groups' => [
            'name'                     => 'Nom',
            'collapsing'               => 'Afficher/Cacher les options',
            'visible'                  => 'Toujours déplier',
            'collapsed'                => 'Réduire le groupe par défaut',
            'collapsed_incident'       => 'Réduire le groupe par défaut, mais déplier s\'il y a des incidents',
            'visibility'               => 'Visibilité',
            'visibility_public'        => 'Visible au public',
            'visibility_authenticated' => 'Visible uniquement aux utilisateurs connectés',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Nom',
        'description'        => 'Description',
        'start_at'           => 'Heure de début planifiée',
        'timezone'           => 'Fuseau horaire',
        'schedule_frequency' => 'Fréquence de planification (en secondes)',
        'completion_latency' => 'Délai d’achèvement (en secondes)',
        'group'              => 'Groupe',
        'active'             => 'Actif ?',
        'groups'             => [
            'name' => 'Nom du groupe',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Nom',
        'suffix'                   => 'Suffixe',
        'description'              => 'Description',
        'description-help'         => 'Vous pouvez également utiliser le format Markdown.',
        'display-chart'            => 'Afficher le graphique sur la page de statut ?',
        'default-value'            => 'Valeur par défaut',
        'calc_type'                => 'Calcul des données',
        'type_sum'                 => 'Somme',
        'type_avg'                 => 'Moyenne',
        'places'                   => 'Nombre de chiffres après la virgule',
        'default_view'             => 'Vue par défaut',
        'threshold'                => 'Quel intervalle en minutes entre chaque point de métrique ?',
        'visibility'               => 'Visibilité',
        'visibility_authenticated' => 'Visible aux utilisateurs authentifiés',
        'visibility_public'        => 'Visible à tous',
        'visibility_hidden'        => 'Toujours caché',

        'points' => [
            'value' => 'Valeur',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'Nom du site',
            'site-url'                              => 'URL du site',
            'display-graphs'                        => 'Afficher les graphiques sur la page de statut ?',
            'about-this-page'                       => 'À propos de cette page',
            'days-of-incidents'                     => 'Combien de jours d\'incidents à montrer ?',
            'time_before_refresh'                   => 'Status page refresh rate (in seconds)',
            'major_outage_rate'                     => 'Major outage threshold (in %)',
            'banner'                                => 'Image d\'en-tête',
            'banner-help'                           => "It's recommended that you upload files no bigger than 930px wide",
            'subscribers'                           => 'Permettre aux personnes de s\'inscrire aux notifications par e-mail ?',
            'suppress_notifications_in_maintenance' => 'Suppress notifications when incident occurs during maintenance period?',
            'skip_subscriber_verification'          => 'Ne pas vérifier les utilisateurs ? (Attention, vous pourriez être spammé)',
            'automatic_localization'                => 'Traduire automatiquement votre page de statut dans la langue du visiteur ?',
            'enable_external_dependencies'          => 'Activer les dépendances tierces (Google Fonts, Trackers, etc...)',
            'show_timezone'                         => 'Show the timezone the status page is running in',
            'only_disrupted_days'                   => 'Afficher uniquement les jours contenant des incidents dans la timeline ?',
        ],
        'analytics' => [
            'analytics_google'       => 'Code de Google Analytics',
            'analytics_gosquared'    => 'Code de GoSquared Analytics',
            'analytics_piwik_url'    => 'URL de votre instance de Piwik (sans http(s)://)',
            'analytics_piwik_siteid' => 'Id du site de Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Fuseau horaire du site',
            'site-locale'          => 'Langue du site',
            'date-format'          => 'Format de la date',
            'incident-date-format' => 'Format de la date de l\'incident',
        ],
        'security' => [
            'allowed-domains'           => 'Domaines autorisés',
            'allowed-domains-help'      => 'Séparés par des virgules. Le domaine défini ci-dessus est automatiquement autorisé par défaut.',
            'always-authenticate'       => 'Always authenticate',
            'always-authenticate-help'  => 'Require login to view any Cachet page',
        ],
        'stylesheet' => [
            'custom-css' => 'Feuille de style personnalisée',
        ],
        'theme' => [
            'background-color'        => 'Couleur de fond',
            'background-fills'        => 'Couleur de remplissage de l\'arrière-plan (composants, incidents, pied de page)',
            'banner-background-color' => 'Couleur d\'arrière-plan de l\'en-tête',
            'banner-padding'          => 'Marge de l\'en-tête',
            'fullwidth-banner'        => 'Enable full width banner?',
            'text-color'              => 'Couleur du texte',
            'dashboard-login'         => 'Afficher le bouton "Tableau de bord" dans le pied de page ?',
            'reds'                    => 'Rouge (utilisé pour les erreurs)',
            'blues'                   => 'Bleu (utilisé pour les informations)',
            'greens'                  => 'Vert (utilisé pour les succès)',
            'yellows'                 => 'Jaune (utilisé pour les alertes)',
            'oranges'                 => 'Orange (utilisé pour les informations)',
            'metrics'                 => 'Remplissage des données',
            'links'                   => 'Liens',
        ],
    ],

    'user' => [
        'username'       => 'Nom d\'utilisateur',
        'email'          => 'Adresse e-mail',
        'password'       => 'Mot de passe',
        'api-token'      => 'Jeton de l\'API',
        'api-token-help' => 'Régénérer votre jeton API empêchera les applications existantes d\'accéder à Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'Niveau de l\'utilisateur',
        'levels'         => [
            'admin' => 'Administrateur',
            'user'  => 'Utilisateur',
        ],
        '2fa' => [
            'help' => 'Activer l\'authentification à deux facteurs augmente la sécurité de votre compte. Vous aurez besoin de télécharger <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> ou une application similaire sur votre appareil mobile. Lorsque vous vous connectez, il vous sera demandé de fournir un jeton généré par l\'application.',
        ],
        'team' => [
            'description' => 'Invitez les membres de votre équipe en entrant leurs adresses e-mail ici.',
            'email'       => 'Your Team Members Email Address',
        ],
    ],

    'general' => [
        'timezone' => 'Sélection du fuseau horaire',
    ],

    // Buttons
    'add'            => 'Ajouter',
    'save'           => 'Enregistrer',
    'update'         => 'Mettre à jour',
    'create'         => 'Créer',
    'edit'           => 'Modifier',
    'delete'         => 'Supprimer',
    'submit'         => 'Envoyer',
    'cancel'         => 'Annuler',
    'remove'         => 'Enlever',
    'invite'         => 'Inviter',
    'signup'         => 'Inscription',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* Optionnel',
];
