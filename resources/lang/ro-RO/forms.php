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
        'username'         => 'Utilizator',
        'password'         => 'Parolă',
        'site_name'        => 'Numele site-ului',
        'site_domain'      => 'Domeniu Site',
        'site_timezone'    => 'Selectaţi fusul orar',
        'site_locale'      => 'Selectaţi limba dumneavoastră',
        'enable_google2fa' => 'Activaţi Google Two Factor Authentication',
        'cache_driver'     => 'Driver Cache',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Driver Sesiune',
        'mail_driver'      => 'Driver Mail',
        'mail_host'        => 'Gazdă Mail',
        'mail_address'     => 'Adresa Email Expeditor',
        'mail_username'    => 'Utilizator Mail',
        'mail_password'    => 'Parolă Mail',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Utilizator sau Email',
        'email'         => 'Email',
        'password'      => 'Parolă',
        '2fauth'        => 'Cod de Autentificare',
        'invalid'       => 'Utilizator sau parolă incorecte',
        'invalid-token' => 'Token incorect',
        'cookies'       => 'Trebuie să activaţi cookies pentru a vă putea autentifica.',
        'rate-limit'    => 'Limita de folosire a fost depăşită.',
        'remember_me'   => 'Remember me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nume',
        'status'             => 'Stare',
        'component'          => 'Componentă',
        'component_status'   => 'Component Status',
        'message'            => 'Mesaj',
        'message-help'       => 'Puteţi utiliza şi Markdown.',
        'occurred_at'        => 'When did this incident occur?',
        'notify_subscribers' => 'Notificaţi abonaţii?',
        'notify_disabled'    => 'Due to scheduled maintenance, notifications about this incident or its components will be suppressed.',
        'visibility'         => 'Vizibilitatea Incidentului',
        'stick_status'       => 'Stick Incident',
        'stickied'           => 'Stickied',
        'not_stickied'       => 'Not Stickied',
        'public'             => 'Vizibilă public',
        'logged_in_only'     => 'Vizibilă numai pentru utilizatorii autentificaţi',
        'templates'          => [
            'name'     => 'Nume',
            'template' => 'Șablon',
            'twig'     => 'Şabloanele pentru incidente pot folosi limbajul <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    'schedules' => [
        'name'         => 'Nume',
        'status'       => 'Stare',
        'message'      => 'Mesaj',
        'message-help' => 'Puteţi utiliza şi Markdown.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => 'Nume',
            'template' => 'Șablon',
            'twig'     => 'Şabloanele pentru incidente pot folosi limbajul <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nume',
        'status'      => 'Stare',
        'group'       => 'Grup',
        'description' => 'Descriere',
        'link'        => 'Legătură',
        'tags'        => 'Etichete',
        'tags-help'   => 'Separate prin virgulă.',
        'enabled'     => 'Componentă activată?',

        'groups' => [
            'name'                     => 'Nume',
            'collapsing'               => 'Expand/Collapse options',
            'visible'                  => 'Întotdeauna extins',
            'collapsed'                => 'Restrânge grupul implicit',
            'collapsed_incident'       => 'Restrânge grupul, dar extinde în cazul în care sunt probleme',
            'visibility'               => 'Visibility',
            'visibility_public'        => 'Visible to public',
            'visibility_authenticated' => 'Visible only to logged in users',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Nume',
        'description'        => 'Descriere',
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
        'name'                     => 'Nume',
        'suffix'                   => 'Sufix',
        'description'              => 'Descriere',
        'description-help'         => 'Puteţi utiliza şi Markdown.',
        'display-chart'            => 'Afişaţi graficul pe pagina de stare?',
        'default-value'            => 'Valoare implicită',
        'calc_type'                => 'Calculul măsurătorilor',
        'type_sum'                 => 'Sumă',
        'type_avg'                 => 'Medie',
        'places'                   => 'Zecimale',
        'default_view'             => 'Opţiunea implicită',
        'threshold'                => 'Ce interval de timp(în minute) doriţi între măsurători?',
        'visibility'               => 'Visibility',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => 'Valoarea',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'Numele site-ului',
            'site-url'                              => 'URL-ul site-ului',
            'display-graphs'                        => 'Afişaţi grafice pe pagina stare?',
            'about-this-page'                       => 'Despre această pagină',
            'days-of-incidents'                     => 'Câte zile de incidente vreţi să fie afişate?',
            'time_before_refresh'                   => 'Status page refresh rate (in seconds)',
            'major_outage_rate'                     => 'Major outage threshold (in %)',
            'banner'                                => 'Imagine Banner',
            'banner-help'                           => "It's recommended that you upload files no bigger than 930px wide",
            'subscribers'                           => 'Permiteţi vizitatorilor să se aboneze la notificări prin email?',
            'suppress_notifications_in_maintenance' => 'Suppress notifications when incident occurs during maintenance period?',
            'skip_subscriber_verification'          => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'                => 'Schimbaţi automat limba pentru pagina de stare în funcţie de limba vizitatorului?',
            'enable_external_dependencies'          => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                         => 'Show the timezone the status page is running in',
            'only_disrupted_days'                   => 'Only show days containing incidents in the timeline?',
        ],
        'analytics' => [
            'analytics_google'       => 'Cod Google Analytics',
            'analytics_gosquared'    => 'Cod GoSquared Analytics',
            'analytics_piwik_url'    => 'URL-ul instanţei dvs. de Piwik (fără http(s)://)',
            'analytics_piwik_siteid' => 'Id site Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Fusul orar al site-ului',
            'site-locale'          => 'Limba site-ului',
            'date-format'          => 'Formatul datei',
            'incident-date-format' => 'Formatul de timp al incidentului',
        ],
        'security' => [
            'allowed-domains'           => 'Domenii permise',
            'allowed-domains-help'      => 'Separate prin virgulă. Domeniul configurat mai sus este automat permis implicit.',
            'always-authenticate'       => 'Always authenticate',
            'always-authenticate-help'  => 'Require login to view any Cachet page',
        ],
        'stylesheet' => [
            'custom-css' => 'Personalizează Stilurile',
        ],
        'theme' => [
            'background-color'        => 'Culoarea de fundal',
            'background-fills'        => 'Gradient Fundal (componente, incidente, subsol)',
            'banner-background-color' => 'Culoarea de fundal pentru banner',
            'banner-padding'          => 'Spaţiere banner',
            'fullwidth-banner'        => 'Enable full width banner?',
            'text-color'              => 'Culoare Text',
            'dashboard-login'         => 'Arătaţi butonul Dashboard în subsol?',
            'reds'                    => 'Roşu (utilizat pentru mesaje de eroare)',
            'blues'                   => 'Albastru (utilizat pentru mesaje de informare)',
            'greens'                  => 'Verde (folosit pentru mesaje de succes)',
            'yellows'                 => 'Galben (folosit pentru alerte)',
            'oranges'                 => 'Orange (folosit pentru mesaje de notificare)',
            'metrics'                 => 'Măsurători de umplere',
            'links'                   => 'Legături',
        ],
    ],

    'user' => [
        'username'       => 'Utilizator',
        'email'          => 'Email',
        'password'       => 'Parolă',
        'api-token'      => 'Token API',
        'api-token-help' => 'Regenerarea token-ului API va împiedica aplicaţiile existente să acceseze Cachet.',
        'gravatar'       => 'Schimbaţi poza de profil pe Gravatar.',
        'user_level'     => 'Nivel utilizator',
        'levels'         => [
            'admin' => 'Administator',
            'user'  => 'Utilizator',
        ],
        '2fa' => [
            'help' => 'Activând autentificarea two factor securitatea contului dvs. este mult îmbunătăţită. Trebuie să descărcaţi <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> sau o aplicaţie similară pe telefonul dvs. Când vă autentificaţi, vi se va cere token-ul generat de aplicaţie.',
        ],
        'team' => [
            'description' => 'Invităţi membrii echipei introducând aici adresele lor de email.',
            'email'       => 'Your Team Members Email Address',
        ],
    ],

    'general' => [
        'timezone' => 'Select Timezone',
    ],

    // Buttons
    'add'            => 'Adaugă',
    'save'           => 'Salvează',
    'update'         => 'Actualizează',
    'create'         => 'Creează',
    'edit'           => 'Modifică',
    'delete'         => 'Şterge',
    'submit'         => 'Trimite',
    'cancel'         => 'Renunță',
    'remove'         => 'Elimină',
    'invite'         => 'Invită',
    'signup'         => 'Înregistrează-te',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* Opţional',
];
