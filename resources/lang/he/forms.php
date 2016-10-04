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
        'email'            => 'כתובת דוא"ל',
        'username'         => 'שם משתמש',
        'password'         => 'סיסמא',
        'site_name'        => 'שם האתר',
        'site_domain'      => 'Site Domain',
        'site_timezone'    => 'בחר איזור זמן',
        'site_locale'      => 'בחר שפה',
        'enable_google2fa' => 'Enable Google Two Factor Authentication',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Session Driver',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username or Email',
        'email'         => 'כתובת דוא"ל',
        'password'      => 'סיסמא',
        '2fauth'        => 'Authentication Code',
        'invalid'       => 'Invalid username or password',
        'invalid-token' => 'Invalid token',
        'cookies'       => 'You must enable cookies to login.',
        'rate-limit'    => 'Rate limit exceeded.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'שם',
        'status'             => 'סטטוס',
        'component'          => 'Component',
        'message'            => 'הודעה',
        'message-help'       => 'You may also use Markdown.',
        'scheduled_at'       => 'למתי לתזמן את התחזוקה?',
        'incident_time'      => 'When did this incident occur?',
        'notify_subscribers' => 'Notify subscribers?',
        'visibility'         => 'Incident Visibility',
        'public'             => 'Viewable by public',
        'logged_in_only'     => 'Only visible to logged in users',
        'templates'          => [
            'name'     => 'שם',
            'template' => 'תבנית',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'שם',
        'status'      => 'סטטוס',
        'group'       => 'קבוצה',
        'description' => 'הגדרה',
        'link'        => 'קישור',
        'tags'        => 'טאגים',
        'tags-help'   => 'מופרד באמצעות פסיקים.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'               => 'שם',
            'collapsing'         => 'Choose visibility of the group',
            'visible'            => 'Always expanded',
            'collapsed'          => 'Collapse the group by default',
            'collapsed_incident' => 'Collapse the group, but expand if there are issues',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'שם',
        'suffix'           => 'סיומת',
        'description'      => 'הגדרה',
        'description-help' => 'You may also use Markdown.',
        'display-chart'    => 'Display chart on status page?',
        'default-value'    => 'Default value',
        'calc_type'        => 'Calculation of metrics',
        'type_sum'         => 'Sum',
        'type_avg'         => 'Average',
        'places'           => 'Decimal places',
        'default_view'     => 'Default view',
        'threshold'        => 'How many minutes of threshold between metric points?',

        'points' => [
            'value' => 'ערך',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'שם האתר',
            'site-url'               => 'כתובת url של האתר',
            'display-graphs'         => 'להציג גרפים בדף של סטטוס?',
            'about-this-page'        => 'About this page',
            'days-of-incidents'      => 'כמה ימים של אירועים להראות?',
            'banner'                 => 'Banner Image',
            'banner-help'            => "It's recommended that you upload files no bigger than 930px wide .",
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
        'username'       => 'Username',
        'email'          => 'כתובת דוא"ל',
        'password'       => 'סיסמא',
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
    'save'   => 'Save',
    'update' => 'Update',
    'create' => 'Create',
    'edit'   => 'Edit',
    'delete' => 'Delete',
    'submit' => 'Submit',
    'cancel' => 'Cancel',
    'remove' => 'Remove',
    'invite' => 'Invite',
    'signup' => 'Sign Up',

    // Other
    'optional' => '* Optional',
];
