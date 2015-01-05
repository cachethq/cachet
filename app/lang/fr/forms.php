<?php

return [

    // Setup form fields
    'setup' => [
        'email'       => 'Adresse email',
        'username'    => 'Identifiant',
        'password'    => 'Mot de passe',
        'site_name'   => 'Nom du site',
        'site_domain' => 'Domaine du site',
    ],

    // Login form fields
    'login' => [
        'email'    => 'Adresse email',
        'password' => 'Mot de passe',
    ],

    // Incidents form fields
    'incidents' => [
        'name'         => 'Nom',
        'status'       => 'Statut',
        'message'      => 'Message',
        'message-help' => 'Vous pouvez aussi utiliser du Markdown.',

        'templates' => [
            'name'     => 'Nom',
            'template' => 'Modèle',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nom',
        'status'      => 'Statut',
        'group'       => 'Groupe',
        'description' => 'Description',
        'link'        => 'Lien',
        'tags'        => 'Tags',
        'tags-help'   => 'Séparé par une virgule.',

        'groups' => [
            'name' => 'Nom',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'         => 'Nom du site',
            'site-url'          => 'URL du site',
            'about-this-page'   => 'À propos de cette page',
            'days-of-incidents' => 'Nombre de jours à afficher ?',
            'banner'            => 'Bannière',
            'banner-help'       => "Il est recommandé de télécharger des fichiers de moins de 930 pixels de large.",
        ],
        'security' => [
            'allowed-domains'      => 'Domaines autorisés. <small class="help-block"></small>',
            'allowed-domains-help' => 'Séparés par une virgule. Les domaines enregistrés ci-dessus seront automatiquement autorisés par défaut.',
        ],
        'stylesheet' => [
            'custom-css' => 'Feuille de style personnalisée',
        ],
        'theme' => [
            'background-color' => 'Couleur d\'arrière plan',
            'text-color'       => 'Couleur du texte',
        ],
    ],

    'user' => [
        'username'     => 'Identifiant',
        'email'        => 'Adresse email',
        'password'     => 'Mot de passe',
        'api-key'      => 'Clé API',
        'api-key-help' => 'Regénérer votre clé API révoquera toutes les applications existantes.',
    ],

    // Buttons
    'add'    => 'Ajouter',
    'save'   => 'Sauvegarder',
    'update' => 'Mettre à jour',
    'create' => 'Créer',
    'edit'   => 'Éditer',
    'delete' => 'Effacer',
    'submit' => 'Envoyer',
    'cancel' => 'Annuler',
    'remove' => 'Supprimer'
];
