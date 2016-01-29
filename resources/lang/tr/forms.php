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
        'email'            => 'E-posta',
        'username'         => 'Username',
        'password'         => 'Parola',
        'site_name'        => 'Site adı',
        'site_domain'      => 'Site alan adı',
        'site_timezone'    => 'Zaman dilimi seçin',
        'site_locale'      => 'Dil seçin',
        'enable_google2fa' => 'Google İki Faktor Doğrulamayı etkinleştir',
        'cache_driver'     => 'Önbellek sürücüsü',
        'session_driver'   => 'Oturum sürücüsü',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username or Email',
        'email'         => 'E-posta',
        'password'      => 'Parola',
        '2fauth'        => 'Onaylama Kodu',
        'invalid'       => 'Invalid username or password',
        'invalid-token' => 'Geçersiz token',
        'cookies'       => 'Giriş yapabilmek için çerezleri açmalısın',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'İsim',
        'status'             => 'Durum',
        'component'          => 'Bileşen',
        'message'            => 'Mesaj',
        'message-help'       => 'Etiketleme kullanabilirsiniz.',
        'scheduled_at'       => 'Bakım ne zaman?',
        'incident_time'      => 'When did this incident occur?',
        'notify_subscribers' => 'Notify Subscribers?',
        'visibility'         => 'Incident Visibility',
        'public'             => 'Herkese açık',
        'logged_in_only'     => 'Only visible to logged in users',
        'templates'          => [
            'name'     => 'İsim',
            'template' => 'Tema',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'İsim',
        'status'      => 'Durum',
        'group'       => 'Grup',
        'description' => 'Açıklama',
        'link'        => 'Link',
        'tags'        => 'Etiketler',
        'tags-help'   => 'Comma separated.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'      => 'İsim',
            'collapsed' => 'Collapse the group by default?',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'İsim',
        'suffix'           => 'Suffix',
        'description'      => 'Açıklama',
        'description-help' => 'Etiketleme kullanabilirsiniz.',
        'display-chart'    => 'Display chart on status page?',
        'default-value'    => 'Default Value',
        'calc_type'        => 'Calculation of Metrics',
        'type_sum'         => 'Toplam',
        'type_avg'         => 'Ortalama',
        'places'           => 'Decimal Places',
        'default_view'     => 'Default View',

        'points' => [
            'value' => 'Değer',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Site adı',
            'site-url'               => 'Site url',
            'display-graphs'         => 'Display graphs on status page?',
            'about-this-page'        => 'Hakkında',
            'days-of-incidents'      => 'How many days of incidents to show?',
            'banner'                 => 'Banner resim',
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
        'username'       => 'Username',
        'email'          => 'E-posta',
        'password'       => 'Parola',
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
