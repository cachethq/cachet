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
        'username'         => 'Emri i përdoruesit',
        'password'         => 'Fjalëkalimi',
        'site_name'        => 'Emri Faqes',
        'site_domain'      => 'Site Domain',
        'site_timezone'    => 'Zgjidh orën e zonës tuaj',
        'site_locale'      => 'Zgjidhni gjuhën tuaj',
        'enable_google2fa' => 'Aktivizo Dy-Faktorin e identifikimit te Google',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Session Driver',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username or Email',
        'email'         => 'Email',
        'password'      => 'Fjalëkalimi',
        '2fauth'        => 'Kodi i identifikimit',
        'invalid'       => 'Invalid username or password',
        'invalid-token' => '"Token" i pavlefshëm',
        'cookies'       => 'You must enable cookies to login.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Emri',
        'status'             => 'Statusi',
        'component'          => 'Përbërësit',
        'message'            => 'Mesazhi',
        'message-help'       => 'You may also use Markdown.',
        'scheduled_at'       => 'When to schedule the maintenance for?',
        'incident_time'      => 'When did this incident occur?',
        'notify_subscribers' => 'Notify Subscribers?',
        'visibility'         => 'Incident Visibility',
        'public'             => 'Viewable by public',
        'logged_in_only'     => 'Only visible to logged in users',
        'templates'          => [
            'name'     => 'Emri',
            'template' => 'Paraqitja',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Emri',
        'status'      => 'Statusi',
        'group'       => 'Group',
        'description' => 'Përshkrimi',
        'link'        => 'Nderlidhja',
        'tags'        => 'Etiketa',
        'tags-help'   => 'Comma separated.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'      => 'Emri',
            'collapsed' => 'Collapse the group by default?',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Emri',
        'suffix'           => 'Suffix',
        'description'      => 'Përshkrimi',
        'description-help' => 'You may also use Markdown.',
        'display-chart'    => 'Display chart on status page?',
        'default-value'    => 'Default Value',
        'calc_type'        => 'Calculation of Metrics',
        'type_sum'         => 'Sum',
        'type_avg'         => 'Average',
        'places'           => 'Decimal Places',
        'default_view'     => 'Default View',

        'points' => [
            'value' => 'Value',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Emri Faqes',
            'site-url'               => 'Nderlidhja Faqes',
            'display-graphs'         => 'Display graphs on status page?',
            'about-this-page'        => 'Rreth faqes',
            'days-of-incidents'      => 'How many days of incidents to show?',
            'banner'                 => 'Banner Image',
            'banner-help'            => "It's recommended that you upload files no bigger than 930px wide .",
            'subscribers'            => 'Allow people to signup to email notifications?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics code',
            'analytics_gosquared'    => 'GoSquared Analytics code',
            'analytics_piwik_url'    => 'URL of your Piwik instance (without http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'localization' => [
            'site-timezone'          => 'Site Timezone',
            'site-locale'            => 'Site Language',
            'date-format'            => 'Date Format',
            'incident-date-format'   => 'Incident Timestamp Format',
        ],
        'security' => [
            'allowed-domains'      => 'Allowed Domains',
            'allowed-domains-help' => 'Comma separated. The domain set above is automatically allowed by default.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background Color',
            'background-fills'        => 'Background Fills (Components, Incidents, Footer)',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Text Color',
            'dashboard-login'         => 'Show dashboard button in the footer?',
            'reds'                    => 'Red (Used for errors)',
            'blues'                   => 'Blue (Used for information)',
            'greens'                  => 'Green (Used for success)',
            'yellows'                 => 'Yellow (Used for alerts)',
            'oranges'                 => 'Orange (Used for notices)',
            'metrics'                 => 'Metrics Fill',
            'links'                   => 'Links',
        ],
    ],

    'user' => [
        'username'       => 'Emri i përdoruesit',
        'email'          => 'Email',
        'password'       => 'Fjalëkalimi',
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
    'add'    => 'Shto',
    'save'   => 'Ruaj',
    'update' => ' Përditëso',
    'create' => 'Krijo',
    'edit'   => 'Ndrysho',
    'delete' => 'Fshije',
    'submit' => 'Parashtroje',
    'cancel' => 'Anulloje',
    'remove' => 'Hiqe',
    'invite' => 'Invite',
    'signup' => 'Sign Up',

    // Other
    'optional' => '* Optional',
];
