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
        'email'            => 'E-post',
        'username'         => 'Brukernavn',
        'password'         => 'Passord',
        'site_name'        => 'Nettstedsnavn',
        'site_domain'      => 'Nettstedsdomene',
        'site_timezone'    => 'Velg din tidssone',
        'site_locale'      => 'Velg ditt språk',
        'enable_google2fa' => 'Aktiver Google to-faktor autentisering',
        'cache_driver'     => 'Cache-Driver',
        'queue_driver'     => 'Kø-Driver',
        'session_driver'   => 'Økt Driver',
        'mail_driver'      => 'E-post driver',
        'mail_host'        => 'E-post tjener',
        'mail_address'     => 'E-post-fra adresse',
        'mail_username'    => 'E-post brukernavn',
        'mail_password'    => 'E-post passord',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Brukernavn eller e-post',
        'email'         => 'E-post',
        'password'      => 'Passord',
        '2fauth'        => 'Autentiseringskode',
        'invalid'       => 'Ugyldig brukernavn eller passord',
        'invalid-token' => 'Ugyldig token',
        'cookies'       => 'Du må aktivere informasjonskapsler for å logge inn.',
        'rate-limit'    => 'Hyppighetsgrense overskredet.',
        'remember_me'   => 'Husk meg',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Navn',
        'status'             => 'Status',
        'component'          => 'Komponent',
        'component_status'   => 'Komponentstatus',
        'message'            => 'Melding',
        'message-help'       => 'Du kan også bruke Markdown.',
        'occurred_at'        => 'Når inntraff denne hendelsen?',
        'notify_subscribers' => 'Varsle abonnenter?',
        'notify_disabled'    => 'På grunn av planlagt vedlikehold vil meldinger om denne hendelsen eller komponentene bli utelatt.',
        'visibility'         => 'Hendelsens synlighet',
        'stick_status'       => 'Fest hendelsen',
        'stickied'           => 'Festet',
        'not_stickied'       => 'Ikke festet',
        'public'             => 'Offentlig synlig',
        'logged_in_only'     => 'Bare synlig for innloggede brukere',
        'templates'          => [
            'name'     => 'Navn',
            'template' => 'Mal',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    'schedules' => [
        'name'         => 'Navn',
        'status'       => 'Status',
        'message'      => 'Melding',
        'message-help' => 'Du kan også bruke Markdown.',
        'scheduled_at' => 'Når er dette vedlikeholdet planlagt for?',
        'completed_at' => 'Når er dette vedlikeholdet fullført?',
        'templates'    => [
            'name'     => 'Navn',
            'template' => 'Mal',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Navn',
        'status'      => 'Status',
        'group'       => 'Gruppe',
        'description' => 'Beskrivelse',
        'link'        => 'Lenke',
        'tags'        => 'Etiketter',
        'tags-help'   => 'Atskilt med komma.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'                     => 'Navn',
            'collapsing'               => 'Vis/skjul alternativer',
            'visible'                  => 'Always expanded',
            'collapsed'                => 'Skjul gruppen som standard',
            'collapsed_incident'       => 'Skjul gruppen, men utvid hvis det er problemer',
            'visibility'               => 'Synlighet',
            'visibility_public'        => 'Synlig for offentligheten',
            'visibility_authenticated' => 'Vises bare for påloggede brukere',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Navn',
        'description'        => 'Beskrivelse',
        'start_at'           => 'Planlagte starttidspunkt',
        'timezone'           => 'Tidssone',
        'schedule_frequency' => 'Schedule frequency (in seconds)',
        'completion_latency' => 'Completion latency (in seconds)',
        'group'              => 'Gruppe',
        'active'             => 'Aktiv?',
        'groups'             => [
            'name' => 'Gruppenavn',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Navn',
        'suffix'                   => 'Suffiks',
        'description'              => 'Beskrivelse',
        'description-help'         => 'Du kan også bruke Markdown.',
        'display-chart'            => 'Display chart on status page?',
        'default-value'            => 'Standardverdi',
        'calc_type'                => 'Kalkulering av beregninger',
        'type_sum'                 => 'Sum',
        'type_avg'                 => 'Gjennomsnittlig',
        'places'                   => 'Decimal places',
        'default_view'             => 'Standardvisning',
        'threshold'                => 'How many minutes of threshold between metric points?',
        'visibility'               => 'Synlighet',
        'visibility_authenticated' => 'Synlig for innloggede brukere',
        'visibility_public'        => 'Synlig for alle',
        'visibility_hidden'        => 'Alltid skjult',

        'points' => [
            'value' => 'Verdi',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'Nettstedsnavn',
            'site-url'                              => 'Site URL',
            'display-graphs'                        => 'Vis grafer på statussiden?',
            'about-this-page'                       => 'Om denne siden',
            'days-of-incidents'                     => 'How many days of incidents to show?',
            'time_before_refresh'                   => 'Statusside oppdateringsfrekvens (i sekunder)',
            'major_outage_rate'                     => 'Større brudd terskel (i %)',
            'banner'                                => 'Bannerbilde',
            'banner-help'                           => 'Det anbefales at du ikke laster opp bilder bredere enn 930 piksler',
            'subscribers'                           => 'Allow people to signup to email notifications?',
            'suppress_notifications_in_maintenance' => 'Utelat notifikasjoner når hendelse inntreffer under vedlikeholdsperiode?',
            'skip_subscriber_verification'          => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'                => 'Automatically localise your status page to your visitor\'s language?',
            'enable_external_dependencies'          => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                         => 'Vis tidssonen statussiden kjører med',
            'only_disrupted_days'                   => 'Bare vis dager som inneholder hendelser i tidslinjen?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics code',
            'analytics_gosquared'    => 'GoSquared Analytics code',
            'analytics_piwik_url'    => 'URL of your Piwik instance',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'localization' => [
            'site-timezone'        => 'Site timezone',
            'site-locale'          => 'Site language',
            'date-format'          => 'Date format',
            'incident-date-format' => 'Incident timestamp format',
        ],
        'security' => [
            'allowed-domains'           => 'Allowed domains',
            'allowed-domains-help'      => 'Comma separated. The domain set above is automatically allowed by default.',
            'always-authenticate'       => 'Alltid autentiser',
            'always-authenticate-help'  => 'Krev innlogging for å vise alle Cachet sider',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Bakgrunnsfarge',
            'background-fills'        => 'Background fills (components, incidents, footer)',
            'banner-background-color' => 'Banner background color',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Aktivere fullbredde banner?',
            'text-color'              => 'Tekstfarge',
            'dashboard-login'         => 'Show dashboard button in the footer?',
            'reds'                    => 'Red (used for errors)',
            'blues'                   => 'Blue (used for information)',
            'greens'                  => 'Green (used for success)',
            'yellows'                 => 'Yellow (used for alerts)',
            'oranges'                 => 'Orange (used for notices)',
            'metrics'                 => 'Metrics fill',
            'links'                   => 'Links',
        ],
    ],

    'user' => [
        'username'       => 'Brukernavn',
        'email'          => 'E-post',
        'password'       => 'Passord',
        'api-token'      => 'API Token',
        'api-token-help' => 'Regenerating your API token will prevent existing applications from accessing Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'User Level',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'Bruker',
        ],
        '2fa' => [
            'help' => 'Enabling two factor authentication increases security of your account. You will need to download <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> or a similar app on to your mobile device. When you login you will be asked to provide a token generated by the app.',
        ],
        'team' => [
            'description' => 'Invite your team members by entering their email addresses here.',
            'email'       => 'Your Team Members Email Address',
        ],
    ],

    'general' => [
        'timezone' => 'Velg tidssone',
    ],

    'seo' => [
        'title'        => 'SEO Title',
        'description'  => 'SEO Description',
    ],

    // Buttons
    'add'            => 'Add',
    'save'           => 'Save',
    'update'         => 'Update',
    'create'         => 'Create',
    'edit'           => 'Edit',
    'delete'         => 'Delete',
    'submit'         => 'Submit',
    'cancel'         => 'Cancel',
    'remove'         => 'Remove',
    'invite'         => 'Invite',
    'signup'         => 'Registerer deg',
    'manage_updates' => 'Administrer oppdateringer',

    // Other
    'optional' => '* Optional',
];
