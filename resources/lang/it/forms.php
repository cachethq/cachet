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
        'email'            => 'Email',
        'username'         => 'Username',
        'password'         => 'Password',
        'site_name'        => 'Nome del sito',
        'site_domain'      => 'Dominio del sito',
        'site_timezone'    => 'Seleziona il tuo Fuso Orario',
        'site_locale'      => 'Seleziona la tua lingua',
        'enable_google2fa' => 'Abilita la verifica in 2 passaggi di Google',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Session Driver',
    ],

    // Login form fields
    'login' => [
        'email'         => 'Email',
        'password'      => 'Password',
        '2fauth'        => 'Codice di autenticazione',
        'invalid'       => 'Email o password non valida',
        'invalid-token' => 'Token non valido',
        'cookies'       => 'Devi abilitare i cookie per accedere.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nome',
        'status'             => 'Stato',
        'component'          => 'Componente',
        'message'            => 'Messaggio',
        'message-help'       => 'Puoi usare anche Markdown.',
        'scheduled_at'       => 'Per quando programmare la manutenzione?',
        'incident_time'      => 'Quando è avvenuto l\'incidente?',
        'notify_subscribers' => 'Notifica gli iscritti',
        'visibility'         => 'Visibilità incidente',
        'public'             => 'Visibilità pubblica',
        'logged_in_only'     => 'Visibile solo agli utenti loggati',
        'templates'          => [
            'name'     => 'Nome',
            'template' => 'Modello',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nome',
        'status'      => 'Stato',
        'group'       => 'Gruppo',
        'description' => 'Descrizione',
        'link'        => 'Link',
        'tags'        => 'Tags',
        'tags-help'   => 'Separati da virgola.',

        'groups' => [
            'name' => 'Nome',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Nome',
        'suffix'           => 'Suffisso',
        'description'      => 'Descrizione',
        'description-help' => 'Puoi usare anche Markdown.',
        'display-chart'    => 'Visualizzare grafico sulla Status Page?',
        'default-value'    => 'Valore di default',
        'calc_type'        => 'Calcolo delle metriche',
        'type_sum'         => 'Somma',
        'type_avg'         => 'Media',

        'points' => [
            'value' => 'Valore',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Nome del sito',
            'site-url'               => 'URL del sito',
            'display-graphs'         => 'Visualizzare grafici sulla Status Page?',
            'about-this-page'        => 'Su questa pagina',
            'days-of-incidents'      => 'Quanti giorni di incidenti mostrare?',
            'banner'                 => 'Immagine Banner',
            'banner-help'            => 'Si consiglia di caricare file non più grandi di 930px di larghezza.',
            'subscribers'            => 'Consentire alle persone di iscriversi alle notifiche email?',
        ],
        'analytics' => [
            'analytics_google'       => 'Codice Google Analytics',
            'analytics_gosquared'    => 'Codice GoSquared Analytics',
            'analytics_piwik_url'    => 'URL della tua istanza Piwik (senza http(s)://)',
            'analytics_piwik_siteid' => 'ID sito Piwik',
        ],
        'localization' => [
            'site-timezone'          => 'Fuso orario del sito',
            'site-locale'            => 'Lingua del sito',
            'date-format'            => 'Formato Data',
            'incident-date-format'   => 'Formato Timestamp dell\'incidente',
        ],
        'security' => [
            'allowed-domains'      => 'Domini consentiti',
            'allowed-domains-help' => 'Separati da virgola. Il dominio impostato sopra è automaticamente consentito di default.',
        ],
        'stylesheet' => [
            'custom-css' => 'Foglio di stile personalizzato',
        ],
        'theme' => [
            'background-color'        => 'Colore di sfondo',
            'text-color'              => 'Colore del testo',
            'dashboard-login'         => 'Visualizzare il pulsante Dashboard nel footer?',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
        ],
    ],

    'user' => [
        'username'       => 'Username',
        'email'          => 'Email',
        'password'       => 'Password',
        'api-token'      => 'Token API',
        'api-token-help' => 'Rigenerando il token delle API impedirai l\'accesso a Cachet alle applicazioni esistenti.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'Livello utente',
        'levels'         => [
            'admin' => 'Amministratore',
            'user'  => 'Utente',
        ],
        '2fa' => [
            'help' => 'L\'abilitazione della verifica in 2 passaggi aumenta la sicurezza del tuo account. Sarà necessario scaricare <a href="https://support.google.com/accounts/answer/1066447?hl=it">Google Authenticator</a> o un\'applicazione simile sul tuo dispositivo mobile. Quando accederai, ti verrà chiesto di fornire un token generato dall\'app.',
        ],
    ],

    // Buttons
    'add'    => 'Aggiungi',
    'save'   => 'Salva',
    'update' => 'Aggiorna',
    'create' => 'Crea',
    'edit'   => 'Modifica',
    'delete' => 'Elimina',
    'submit' => 'Invia',
    'cancel' => 'Annulla',
    'remove' => 'Rimuovi',

    // Other
    'optional' => '* Opzionale',
];
