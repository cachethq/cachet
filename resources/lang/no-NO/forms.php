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
        'site_timezone'    => 'Velg tidssone',
        'site_locale'      => 'Velg språk',
        'enable_google2fa' => 'Aktiver Google to-faktor autentisering',
        'cache_driver'     => 'Cache-Driver',
        'session_driver'   => 'Økt Driver',
        'mail_driver'      => 'E-post driver',
        'mail_host'        => 'E-post tjener',
        'mail_address'     => 'E-post-fra adressen',
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
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Navn',
        'status'             => 'Status',
        'component'          => 'Komponent',
        'message'            => 'Melding',
        'message-help'       => 'Du kan også bruke Markdown.',
        'scheduled_at'       => 'When to schedule the maintenance for?',
        'incident_time'      => 'Når inntraff denne hendelsen?',
        'notify_subscribers' => 'Varsle abonnenter?',
        'visibility'         => 'Hendelsens synlighet',
        'public'             => 'Viewable by public',
        'logged_in_only'     => 'Bare synlig for innloggede brukere',
        'templates'          => [
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
            'name'               => 'Navn',
            'collapsing'         => 'Choose visibility of the group',
            'visible'            => 'Always expanded',
            'collapsed'          => 'Skjul gruppen som standard',
            'collapsed_incident' => 'Skjul gruppen, men utvid hvis det er problemer',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Navn',
        'suffix'           => 'Suffiks',
        'description'      => 'Beskrivelse',
        'description-help' => 'Du kan også bruke Markdown.',
        'display-chart'    => 'Display chart on status page?',
        'default-value'    => 'Standardverdi',
        'calc_type'        => 'Kalkulering av beregninger',
        'type_sum'         => 'Sum',
        'type_avg'         => 'Gjennomsnittlig',
        'places'           => 'Decimal places',
        'default_view'     => 'Standardvisning',
        'threshold'        => 'How many minutes of threshold between metric points?',

        'points' => [
            'value' => 'Verdi',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Nettstedsnavn',
            'site-url'               => 'Site URL',
            'display-graphs'         => 'Vis grafer på statussiden?',
            'about-this-page'        => 'Om denne siden',
            'days-of-incidents'      => 'How many days of incidents to show?',
            'banner'                 => 'Bannerbilde',
            'banner-help'            => 'Det anbefales at du ikke laster opp bilder bredere enn 930 piksler.',
            'subscribers'            => 'Allow people to signup to email notifications?',
            'automatic_localization' => 'Automatically localise your status page to your visitor\'s language?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics code',
            'analytics_gosquared'    => 'GoSquared Analytics code',
            'analytics_piwik_url'    => 'URL of your Piwik instance (without http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'localization' => [
            'site-timezone'        => 'Site timezone',
            'site-locale'          => 'Site language',
            'date-format'          => 'Date format',
            'incident-date-format' => 'Incident timestamp format',
        ],
        'security' => [
            'allowed-domains'      => 'Allowed domains',
            'allowed-domains-help' => 'Comma separated. The domain set above is automatically allowed by default.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background Color',
            'background-fills'        => 'Background fills (components, incidents, footer)',
            'banner-background-color' => 'Banner background color',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Text Color',
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
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Add',
    'save'   => 'Save',
    'update' => 'Update',
    'create' => 'Create',
    'edit'   => 'Edit',
    'delete' => 'Delete',
    'submit' => 'Submit',
    'cancel' => 'Cancel',
    'remove' => 'Remove',
    'invite' => 'Invite',
    'signup' => 'Registerer deg',

    // Other
    'optional' => '* Optional',
];
