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
        'email'            => 'Epost',
        'username'         => 'Brukernavn',
        'password'         => 'Passord',
        'site_name'        => 'Nettstedsnavn',
        'site_domain'      => 'Nettstedet domene',
        'site_timezone'    => 'Velg tidssone',
        'site_locale'      => 'Velg språk',
        'enable_google2fa' => 'Aktiver Google Two Factor Authentication',
        'cache_driver'     => 'Cache-Driver',
        'session_driver'   => 'Økt Driver',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username or Email',
        'email'         => 'Epost',
        'password'      => 'Passord',
        '2fauth'        => 'Godkjenningskode',
        'invalid'       => 'Invalid username or password',
        'invalid-token' => 'Ugyldig token',
        'cookies'       => 'Du må aktivere informasjonskapsler for å logge inn.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Navn',
        'status'             => 'Status',
        'component'          => 'Komponent',
        'message'            => 'Melding',
        'message-help'       => 'Du kan også bruke Markdown.',
        'scheduled_at'       => 'Når ønsker du å planlegge vedlikeholdet?',
        'incident_time'      => 'When did this incident occur?',
        'notify_subscribers' => 'Notify subscribers?',
        'visibility'         => 'Incident visibility',
        'public'             => 'Viewable by public',
        'logged_in_only'     => 'Only visible to logged in users',
        'templates'          => [
            'name'     => 'Navn',
            'template' => 'Template',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Navn',
        'status'      => 'Status',
        'group'       => 'Group',
        'description' => 'Description',
        'link'        => 'Link',
        'tags'        => 'Tags',
        'tags-help'   => 'Comma separated.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'      => 'Navn',
            'collapsed' => 'Collapse the group by default?',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Navn',
        'suffix'           => 'Suffix',
        'description'      => 'Description',
        'description-help' => 'Du kan også bruke Markdown.',
        'display-chart'    => 'Display chart on status page?',
        'default-value'    => 'Default value',
        'calc_type'        => 'Calculation of metrics',
        'type_sum'         => 'Sum',
        'type_avg'         => 'Average',
        'places'           => 'Decimal places',
        'default_view'     => 'Default view',

        'points' => [
            'value' => 'Value',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Sidenavn',
            'site-url'               => 'Nettsteds-URL',
            'display-graphs'         => 'Vis grafer på statussiden?',
            'about-this-page'        => 'Om denne siden',
            'days-of-incidents'      => 'How many days of incidents to show?',
            'banner'                 => 'Banner image',
            'banner-help'            => "Det anbefales at du ikke laster opp bilder bredere enn 930 piksler.",
            'subscribers'            => 'Tillatt brukere å melde seg inn for epostvarslinger?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics code',
            'analytics_gosquared'    => 'GoSquared Analytics code',
            'analytics_piwik_url'    => 'URL of your Piwik instance (without http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'localization' => [
            'site-timezone'          => 'Site timezone',
            'site-locale'            => 'Site language',
            'date-format'            => 'Date format',
            'incident-date-format'   => 'Incident timestamp format',
        ],
        'security' => [
            'allowed-domains'      => 'Allowed domains',
            'allowed-domains-help' => 'Comma separated. The domain set above is automatically allowed by default.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background color',
            'background-fills'        => 'Background fills (components, incidents, footer)',
            'banner-background-color' => 'Banner background color',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Text color',
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
        'username'       => 'Username',
        'email'          => 'Epost',
        'password'       => 'Passord',
        'api-token'      => 'API Token',
        'api-token-help' => 'Regenerating your API token will prevent existing applications from accessing Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'User Level',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'User',
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
    'save'   => 'Lagre',
    'update' => 'Update',
    'create' => 'Opprett',
    'edit'   => 'Rediger',
    'delete' => 'Slett',
    'submit' => 'Submit',
    'cancel' => 'Cancel',
    'remove' => 'Fjern',
    'invite' => 'Invite',
    'signup' => 'Sign Up',

    // Other
    'optional' => '* Optional',
];
