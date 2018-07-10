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
            'twig'     => 'Hendelsesmaler kan benytte <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> syntaks.',
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
            'twig'     => 'Hendelsesmaler kan benytte <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> syntaks.',
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
        'enabled'     => 'Komponent aktivert?',

        'groups' => [
            'name'                     => 'Navn',
            'collapsing'               => 'Vis/skjul alternativer',
            'visible'                  => 'Alltid utvidet',
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
        'schedule_frequency' => 'Planlegge frekvensen (i sekunder)',
        'completion_latency' => 'Ferdigstillelse forsinkelse (i sekunder)',
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
        'display-chart'            => 'Vise diagram på statussiden?',
        'default-value'            => 'Standardverdi',
        'calc_type'                => 'Kalkulering av beregninger',
        'type_sum'                 => 'Sum',
        'type_avg'                 => 'Gjennomsnittlig',
        'places'                   => 'Desimalplasser',
        'default_view'             => 'Standardvisning',
        'threshold'                => 'Hvor mange minutter på terskel mellom metriske punkter?',
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
            'site-url'                              => 'Nettsteds-URL',
            'display-graphs'                        => 'Vis grafer på statussiden?',
            'about-this-page'                       => 'Om denne siden',
            'days-of-incidents'                     => 'Hvor mange dager med hendelser vises?',
            'time_before_refresh'                   => 'Statusside oppdateringsfrekvens (i sekunder)',
            'major_outage_rate'                     => 'Større brudd terskel (i %)',
            'banner'                                => 'Bannerbilde',
            'banner-help'                           => "Det anbefales at du ikke laster opp bilder bredere enn 930 piksler",
            'subscribers'                           => 'Tillatt brukere å melde seg på for e-postvarslinger?',
            'suppress_notifications_in_maintenance' => 'Utelat notifikasjoner når hendelse inntreffer under vedlikeholdsperiode?',
            'skip_subscriber_verification'          => 'Hopp over verifisering av brukere? (Vær advart, du kan bli spammet)',
            'automatic_localization'                => 'Automatisk lokaliser statussiden til besøkendes språk?',
            'enable_external_dependencies'          => 'Aktiver tredjeparts avhengigheter (Google Fonts, Trackers, etc...)',
            'show_timezone'                         => 'Vis tidssonen statussiden kjører med',
            'only_disrupted_days'                   => 'Bare vis dager som inneholder hendelser i tidslinjen?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics-koden',
            'analytics_gosquared'    => 'GoSquared Analytics-koden',
            'analytics_piwik_url'    => 'URL-Adressen til din Piwik instans (uten http(s)://)',
            'analytics_piwik_siteid' => 'Piwiks site-id',
        ],
        'localization' => [
            'site-timezone'        => 'Nettstedets tidssone',
            'site-locale'          => 'Nettstedspråk',
            'date-format'          => 'Datoformat',
            'incident-date-format' => 'Hendelse tidsstempelformat',
        ],
        'security' => [
            'allowed-domains'           => 'Tillatte domener',
            'allowed-domains-help'      => 'Atskilt med komma. Domenet ovenfor tillates automatisk som standard.',
            'always-authenticate'       => 'Alltid autentiser',
            'always-authenticate-help'  => 'Krev innlogging for å vise alle Cachet sider',
        ],
        'stylesheet' => [
            'custom-css' => 'Tilpasset stilark',
        ],
        'theme' => [
            'background-color'        => 'Bakgrunnsfarge',
            'background-fills'        => 'Bakgrunnsfyll (komponenter, hendelser, bunntekst)',
            'banner-background-color' => 'Banner bakgrunnsfarge',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Aktivere fullbredde banner?',
            'text-color'              => 'Tekstfarge',
            'dashboard-login'         => 'Vis dashboardknappen i bunnteksten?',
            'reds'                    => 'Rød (brukes for feil)',
            'blues'                   => 'Blå (brukes for informasjon)',
            'greens'                  => 'Grønn (brukes for suksess)',
            'yellows'                 => 'Gul (brukes for varsler)',
            'oranges'                 => 'Orange (brukes til merknader)',
            'metrics'                 => 'Beregninger fyll',
            'links'                   => 'Lenker',
        ],
    ],

    'user' => [
        'username'       => 'Brukernavn',
        'email'          => 'E-post',
        'password'       => 'Passord',
        'api-token'      => 'API-Token',
        'api-token-help' => 'Regenerering av din API token vil hindre eksisterende programmer fra tilgang til Cachet.',
        'gravatar'       => 'Endre profilbilde på Gravatar.',
        'user_level'     => 'Brukernivå',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'Bruker',
        ],
        '2fa' => [
            'help' => 'Aktivering av to-faktor autentisering øker sikkerheten til kontoen din. Du må laste ned <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> eller en lignende app på den mobile enheten. Når du logger inn vil du bli bedt om å gi et token som er generert av programmet.',
        ],
        'team' => [
            'description' => 'Inviter gruppemedlemmene ved å skrive inn e-postadressene deres her.',
            'email'       => 'E-post #:id',
        ],
    ],

    'general' => [
        'timezone' => 'Velg tidssone',
    ],

    // Buttons
    'add'            => 'Legg til',
    'save'           => 'Lagre',
    'update'         => 'Oppdater',
    'create'         => 'Opprett',
    'edit'           => 'Rediger',
    'delete'         => 'Slett',
    'submit'         => 'Send',
    'cancel'         => 'Avbryt',
    'remove'         => 'Fjern',
    'invite'         => 'Inviter',
    'signup'         => 'Registerer deg',
    'manage_updates' => 'Administrer oppdateringer',

    // Other
    'optional' => '* Valgfritt',
];
