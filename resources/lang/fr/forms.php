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
        'password'         => 'Mot de passe ',
        'site_name'        => 'Nom du site',
        'site_domain'      => 'Nom de domaine du site',
        'site_timezone'    => 'Choisissez votre fuseau horaire',
        'site_locale'      => 'Sélectionner votre langue',
        'enable_google2fa' => 'Activer l\'authentification à deux facteurs de Google',
        'cache_driver'     => 'Gestionnaire de cache',
        'session_driver'   => 'Gestionnaire de session',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Nom d\'utilisateur ou e-mail',
        'email'         => 'Email',
        'password'      => 'Mot de passe ',
        '2fauth'        => 'Code d\'authentification',
        'invalid'       => 'Nom d\'utilisateur ou mot de passe incorrect',
        'invalid-token' => 'Jeton invalide',
        'cookies'       => 'Vous devez activer les cookies pour vous connecter.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nom',
        'status'             => 'Statut',
        'component'          => 'Composant',
        'message'            => 'Message',
        'message-help'       => 'Vous pouvez également utiliser le format Markdown.',
        'scheduled_at'       => 'Quand planifier la maintenance ?',
        'incident_time'      => 'Quand s\'est produit cet incident ?',
        'notify_subscribers' => 'Notifier les abonnés ?',
        'visibility'         => 'Visibilité de l\'incident',
        'public'             => 'Visible par le public',
        'logged_in_only'     => 'Uniquement visible par les utilisateurs enregistrés',
        'templates'          => [
            'name'     => 'Nom',
            'template' => 'Modèle',
            'twig'     => 'Vous pouvez utiliser <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> pour créer des modèles par langues pour les modèles d\'incidents.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nom',
        'status'      => 'Etat',
        'group'       => 'Groupe',
        'description' => 'Description',
        'link'        => 'Lien',
        'tags'        => 'Mots-clés',
        'tags-help'   => 'Séparés par des virgules.',
        'enabled'     => 'Activer le composant ?',

        'groups' => [
            'name'               => 'Nom',
            'collapsing'         => 'Choisir la visibilité du groupe',
            'visible'            => 'Toujours déplier',
            'collapsed'          => 'Réduire le groupe par défaut',
            'collapsed_incident' => 'Réduire le groupe par défaut, mais déplier s\'il y a des incidents',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Nom',
        'suffix'           => 'Suffixe',
        'description'      => 'Description',
        'description-help' => 'Vous pouvez également utiliser le format Markdown.',
        'display-chart'    => 'Afficher le graphique sur la page de statut ?',
        'default-value'    => 'Valeur par défaut',
        'calc_type'        => 'Calcul des données',
        'type_sum'         => 'Somme',
        'type_avg'         => 'Moyenne',
        'places'           => 'Nombre de chiffres après la virgule',
        'default_view'     => 'Vue par défaut',
        'threshold'        => 'How many minutes of threshold between metric points?',

        'points' => [
            'value' => 'Valeur',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Nom du site',
            'site-url'               => 'URL du site',
            'display-graphs'         => 'Afficher les graphiques sur la page de statut ?',
            'about-this-page'        => 'À propos de cette page',
            'days-of-incidents'      => 'Combien de jours d\'incidents à montrer ?',
            'banner'                 => 'Image d\'en-tête',
            'banner-help'            => 'Il est recommandé de téléchargez un fichier ne dépassant pas 930px de large .',
            'subscribers'            => 'Permettre aux personnes de s\'inscrire aux notifications par e-mail ?',
            'automatic_localization' => 'Automatically localise your status page to your visitor\'s language?',
        ],
        'analytics' => [
            'analytics_google'       => 'Code de Google Analytics',
            'analytics_gosquared'    => 'Code de GoSquared Analytics',
            'analytics_piwik_url'    => 'URL de votre instance de Piwik (sans http(s)://)',
            'analytics_piwik_siteid' => 'Id du site de Piwik',
        ],
        'localization' => [
            'site-timezone'          => 'Fuseau horaire du site',
            'site-locale'            => 'Langue du site',
            'date-format'            => 'Format de la date',
            'incident-date-format'   => 'Format de la date de l\'incident',
        ],
        'security' => [
            'allowed-domains'      => 'Domaines autorisés',
            'allowed-domains-help' => 'Séparés par des virgules. Le domaine défini ci-dessus est automatiquement autorisé par défaut.',
        ],
        'stylesheet' => [
            'custom-css' => 'Feuille de style personnalisée',
        ],
        'theme' => [
            'background-color'        => 'Couleur de fond',
            'background-fills'        => 'Couleur de remplissage de l\'arrière-plan (composants, incidents, pied de page)',
            'banner-background-color' => 'Couleur d\'arrière-plan de l\'en-tête',
            'banner-padding'          => 'Marge de l\'en-tête',
            'fullwidth-banner'        => 'Activer l\'en-tête en pleine largeur ?',
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
        'email'          => 'Email',
        'password'       => 'Mot de passe ',
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
            'email'       => 'E-mail #:id',
        ],
    ],

    // Buttons
    'add'    => 'Ajouter',
    'save'   => 'Enregistrer',
    'update' => 'Mettre à jour',
    'create' => 'Créer',
    'edit'   => 'Modifier',
    'delete' => 'Supprimer',
    'submit' => 'Envoyer',
    'cancel' => 'Annuler',
    'remove' => 'Enlever',
    'invite' => 'Inviter',
    'signup' => 'Inscription',

    // Other
    'optional' => '* Optionnel',
];
