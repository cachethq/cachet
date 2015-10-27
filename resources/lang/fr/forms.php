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
        'email'            => 'Adresse email',
        'username'         => 'Nom d\'utilisateur',
        'password'         => 'Mot de passe ',
        'site_name'        => 'Nom du site',
        'site_domain'      => 'Nom de domaine du site',
        'site_timezone'    => 'Choisissez un fuseau horaire',
        'site_locale'      => 'Choisir la langue',
        'enable_google2fa' => 'Activez l\'authentification à deux facteurs Google',
        'cache_driver'     => 'Pilote de cache',
        'session_driver'   => 'Pilote de session',
    ],

    // Login form fields
    'login' => [
        'email'         => 'Email',
        'password'      => 'Mot de passe ',
        '2fauth'        => 'Code d\'authentification',
        'invalid'       => 'E-mail ou mot de passe non valide',
        'invalid-token' => 'Jeton non valide',
        'cookies'       => 'Vous devez activer les cookies pour vous identifier.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nom',
        'status'             => 'Etat',
        'component'          => 'Composant',
        'message'            => 'Message ',
        'message-help'       => 'Vous pouvez également utiliser Markdown.',
        'scheduled_at'       => 'Pour quand planifier la maintenance ?',
        'incident_time'      => 'Quand s\'est produit cet incident ?',
        'notify_subscribers' => 'Aviser les abonnés',
        'visibility'         => 'Visibilité de l\'incident',
        'public'             => 'Visibles par le public',
        'logged_in_only'     => 'Uniquement visible des utilisateurs enregistrés',
        'templates'          => [
            'name'     => 'Nom',
            'template' => 'Modéle',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nom',
        'status'      => 'Etat',
        'group'       => 'Groupes',
        'description' => 'Description',
        'link'        => 'Lien',
        'tags'        => 'Mots clés',
        'tags-help'   => 'séparé par des virgules.',

        'groups' => [
            'name' => 'Nom',
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

        'points' => [
            'value' => 'Valeur',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Nom du site',
            'site-url'               => 'Url du site',
            'display-graphs'         => 'Afficher les graphiques sur la page de status ?',
            'about-this-page'        => 'À propos de cette page',
            'days-of-incidents'      => 'Combien de jours d\'incidents à montrer?',
            'banner'                 => 'Image de la bannière',
            'banner-help'            => 'Il est recommandé que vous téléchargez des fichiers ne dépassant pas les 930px large .',
            'subscribers'            => 'Permettre aux gens de s\'inscrire aux notifications par courrier électronique ?',
        ],
        'analytics' => [
            'analytics_google'       => 'Code de Google Analytics',
            'analytics_gosquared'    => 'Code de GoSquared Analytics',
            'analytics_piwik_url'    => 'URL de votre instance de Piwik (sans http(s)://)',
            'analytics_piwik_siteid' => 'Id de site de Piwik',
        ],
        'localization' => [
            'site-timezone'          => 'Fuseau horaire du site',
            'site-locale'            => 'Langage du site',
            'date-format'            => 'Format Date',
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
            'text-color'              => 'Couleur Texte',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
        ],
    ],

    'user' => [
        'username'       => 'Nom d\'utilisateur',
        'email'          => 'Email',
        'password'       => 'Mot de passe ',
        'api-token'      => 'Jeton de l\'API',
        'api-token-help' => 'Régénérer votre jeton API permettra d\'éviter les applications existantes d\'accéder à Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        '2fa'            => [
            'help' => 'Habilitante authentification à deux facteurs augmente la sécurité de votre compte. Vous aurez besoin de télécharger <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> ou une application similaire sur votre appareil mobile. Lorsque vous vous connectez vous sera demandé de fournir un jeton généré par l\'application.',
        ],
    ],

    // Buttons
    'add'    => 'Ajouter catégorie',
    'save'   => 'Enregistrer',
    'update' => 'mettre à jour',
    'create' => 'Nouveau',
    'edit'   => 'Modifier',
    'delete' => 'Supprimer',
    'submit' => 'ENVOYER',
    'cancel' => 'Annuler',
    'remove' => 'Enlever',

    // Other
    'optional' => '* En option',
];
