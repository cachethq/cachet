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
        'email'            => 'Correu electrònic',
        'username'         => 'Nom de l\'usuari',
        'password'         => 'Contrasenya',
        'site_name'        => 'Nom del lloc',
        'site_domain'      => 'Domini del lloc',
        'site_timezone'    => 'Seleccionau la vostra zona horària',
        'site_locale'      => 'Seleccionau el vostre idioma',
        'enable_google2fa' => 'Habilita l\'autenticació en dos passos de Google',
        'cache_driver'     => 'Controlador de memòria cau',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Controlador de sessió',
        'mail_driver'      => 'Mail Driver',
        'mail_host'        => 'Mail Host',
        'mail_address'     => 'Mail From Address',
        'mail_username'    => 'Mail Username',
        'mail_password'    => 'Mail Password',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Usuari o correu electrònic',
        'email'         => 'Correu electrònic',
        'password'      => 'Contrasenya',
        '2fauth'        => 'Codi d\'autenticació',
        'invalid'       => 'El nom d\'usuari o contrasenya no és vàlid',
        'invalid-token' => 'Token invàlid',
        'cookies'       => 'Heu d\'habilitar les galetes (cookies) per poder iniciar sessió.',
        'rate-limit'    => 'Rate limit exceeded.',
        'remember_me'   => 'Remember me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nom',
        'status'             => 'Estat',
        'component'          => 'Component',
        'message'            => 'Missatge',
        'message-help'       => 'També podeu fer servir Markdown.',
        'occurred_at'        => 'When did this incident occur?',
        'notify_subscribers' => 'Notificar els subscriptors?',
        'visibility'         => 'Visibilitat de l\'incident',
        'stick_status'       => 'Stick Incident',
        'stickied'           => 'Stickied',
        'not_stickied'       => 'Not Stickied',
        'public'             => 'Visible pel públic',
        'logged_in_only'     => 'Visible només per a usuaris registrats',
        'templates'          => [
            'name'     => 'Nom',
            'template' => 'Plantilla',
            'twig'     => 'Les plantilles d\'incidents poden fer ús del llenguatge de plantilles <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    'schedules' => [
        'name'         => 'Nom',
        'status'       => 'Estat',
        'message'      => 'Missatge',
        'message-help' => 'També podeu fer servir Markdown.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => 'Nom',
            'template' => 'Plantilla',
            'twig'     => 'Les plantilles d\'incidents poden fer ús del llenguatge de plantilles <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nom',
        'status'      => 'Estat',
        'group'       => 'Grup',
        'description' => 'Descripció',
        'link'        => 'Enllaç',
        'tags'        => 'Etiquetes',
        'tags-help'   => 'Separat per comes.',
        'enabled'     => 'Component habilitat?',

        'groups' => [
            'name'                     => 'Nom',
            'collapsing'               => 'Expand/Collapse options',
            'visible'                  => 'Sempre ampliat',
            'collapsed'                => 'Per defecte redueix el grup',
            'collapsed_incident'       => 'Per defecte redueix el grup, però amplia\'l si hi ha problemes',
            'visibility'               => 'Visibility',
            'visibility_public'        => 'Visible to public',
            'visibility_authenticated' => 'Visible only to logged in users',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Nom',
        'description'        => 'Descripció',
        'start_at'           => 'Schedule start time',
        'timezone'           => 'Timezone',
        'schedule_frequency' => 'Schedule frequency (in seconds)',
        'completion_latency' => 'Completion latency (in seconds)',
        'group'              => 'Grup',
        'active'             => 'Active?',
        'groups'             => [
            'name' => 'Group Name',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Nom',
        'suffix'                   => 'Sufix',
        'description'              => 'Descripció',
        'description-help'         => 'També podeu fer servir Markdown.',
        'display-chart'            => 'Mostrar gràfica a la pàgina d\'estat?',
        'default-value'            => 'Valor per defecte',
        'calc_type'                => 'Càlcul d\'indicadors',
        'type_sum'                 => 'Suma',
        'type_avg'                 => 'Mitjana',
        'places'                   => 'Nombre de decimals',
        'default_view'             => 'Vista per defecte',
        'threshold'                => 'How many minutes of threshold between metric points?',
        'visibility'               => 'Visibility',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => 'Valor',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                    => 'Nom del lloc',
            'site-url'                     => 'URL del lloc',
            'display-graphs'               => 'Mostrar gràfics a la pàgina d\'estat?',
            'about-this-page'              => 'Sobre aquest lloc',
            'days-of-incidents'            => 'Quants de dies d\'incidents voleu veure?',
            'banner'                       => 'Imatge del banner',
            'banner-help'                  => "Es recomana que no carregueu arxius més grans de 930 píxels d'ample.",
            'subscribers'                  => 'Permetre el registre per a notificacions per correu electrònic?',
            'skip_subscriber_verification' => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'       => 'Automatically localise your status page to your visitor\'s language?',
            'enable_external_dependencies' => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                => 'Show the timezone the status page is running in.',
            'only_disrupted_days'          => 'Only show days containing incidents in the timeline?',
        ],
        'analytics' => [
            'analytics_google'       => 'Codi de Google Analytics',
            'analytics_gosquared'    => 'Codi de GoSquared Analytics',
            'analytics_piwik_url'    => 'URL de la seva instància Piwik (sense http(s)://)',
            'analytics_piwik_siteid' => 'Identificador de lloc del Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Seleccioneu el fus horari',
            'site-locale'          => 'Idioma del lloc',
            'date-format'          => 'Format de la data',
            'incident-date-format' => 'Format del fus horari dels incidents',
        ],
        'security' => [
            'allowed-domains'      => 'Dominis permesos',
            'allowed-domains-help' => 'Separats per comes. El domini especificat a dalt és automàticament permès per defecte.',
        ],
        'stylesheet' => [
            'custom-css' => 'Full d\'estils personalitzats',
        ],
        'theme' => [
            'background-color'        => 'Color de fons',
            'background-fills'        => 'Elements del fons (components, incidents, peu de pàgina)',
            'banner-background-color' => 'Color de fons del banner',
            'banner-padding'          => 'Farciment (padding) del banner',
            'fullwidth-banner'        => 'Habilitar la màxima amplada del banner?',
            'text-color'              => 'Color del text',
            'dashboard-login'         => 'Mostrar el botó del dashboard al peu de pàgina?',
            'reds'                    => 'Vermell (utilitzat per trobar errors)',
            'blues'                   => 'Blau (usat per informació)',
            'greens'                  => 'Verd (utilitzat per l\'èxit)',
            'yellows'                 => 'Groc (utilitzat per alertes)',
            'oranges'                 => 'Taronja (utilitzat per a avisos)',
            'metrics'                 => 'Omplir les mètriques',
            'links'                   => 'Enllaços',
        ],
    ],

    'user' => [
        'username'       => 'Nom de l\'usuari',
        'email'          => 'Correu electrònic',
        'password'       => 'Contrasenya',
        'api-token'      => 'Token de l\'API',
        'api-token-help' => 'Regenerar el seu token de l\'API evitarà a les aplicacions existents accedir al Cachet.',
        'gravatar'       => 'Canviau la vostra imatge de perfil a Gravatar.',
        'user_level'     => 'Nivell d\'usuari',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'Usuari',
        ],
        '2fa' => [
            'help' => 'Habilitar l\'autenticació de dos factor augmenta la seguretat del compte. Necessitareu descarregar <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> o un app similar al vostre dispositiu mòbil. Quan us identifiqueu haureu de proporcionar el token generat per l\'app.',
        ],
        'team' => [
            'description' => 'Convidau els membres del vostre d\'equip introduint les seves adreces de correu electrònic aquí.',
            'email'       => 'Adreça electrònica #:id',
        ],
    ],

    'general' => [
        'timezone' => 'Select Timezone',
    ],

    // Buttons
    'add'    => 'Afegeix',
    'save'   => 'Desar',
    'update' => 'Actualitzar',
    'create' => 'Crear',
    'edit'   => 'Editar',
    'delete' => 'Eliminar',
    'submit' => 'Enviar',
    'cancel' => 'Cancel·lar',
    'remove' => 'Treure',
    'invite' => 'Convidar',
    'signup' => 'Crea un compte',

    // Other
    'optional' => '* Opcional',
];