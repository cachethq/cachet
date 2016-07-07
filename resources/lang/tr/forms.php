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
        'username'         => 'Kullanıcı adı',
        'password'         => 'Parola',
        'site_name'        => 'Site Adı',
        'site_domain'      => 'Site Alan Adı',
        'site_timezone'    => 'Zaman dilimi seçin',
        'site_locale'      => 'Dil seçin',
        'enable_google2fa' => 'Google İki Faktor Doğrulamayı etkinleştir',
        'cache_driver'     => 'Önbellek Sürücüsü',
        'session_driver'   => 'Oturum Sürücüsü',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Kullanıcı Adı veya E-Posta',
        'email'         => 'E-posta',
        'password'      => 'Parola',
        '2fauth'        => 'Onaylama Kodu',
        'invalid'       => 'Kullanıcı adı veya parola hatalı',
        'invalid-token' => 'Geçersiz jeton',
        'cookies'       => 'Oturum açabilmek yapabilmek için çerezleri açmalısınız.',
        'rate-limit'    => 'Rate limit exceeded.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'İsim',
        'status'             => 'Durum',
        'component'          => 'Bileşen',
        'message'            => 'Mesaj',
        'message-help'       => 'Markdown işaretleri kullanabilirsiniz.',
        'scheduled_at'       => 'Bakım ne zaman?',
        'incident_time'      => 'When did this incident occur?',
        'notify_subscribers' => 'Notify subscribers?',
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
        'link'        => 'Bağlantı',
        'tags'        => 'Etiketler',
        'tags-help'   => 'Virgül ile ayrılmış.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'               => 'İsim',
            'collapsing'         => 'Choose visibility of the group',
            'visible'            => 'Always expanded',
            'collapsed'          => 'Collapse the group by default',
            'collapsed_incident' => 'Collapse the group, but expand if there are issues',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'İsim',
        'suffix'           => 'Suffix',
        'description'      => 'Açıklama',
        'description-help' => 'Markdown işaretleri kullanabilirsiniz.',
        'display-chart'    => 'Display chart on status page?',
        'default-value'    => 'Varsayılan değer',
        'calc_type'        => 'Calculation of metrics',
        'type_sum'         => 'Toplam',
        'type_avg'         => 'Ortalama',
        'places'           => 'Decimal places',
        'default_view'     => 'Default view',
        'threshold'        => 'How many minutes of threshold between metric points?',

        'points' => [
            'value' => 'Değer',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Site Adı',
            'site-url'               => 'Site url adresi',
            'display-graphs'         => 'Display graphs on status page?',
            'about-this-page'        => 'Hakkında',
            'days-of-incidents'      => 'How many days of incidents to show?',
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
        'username'       => 'Kullanıcı adı',
        'email'          => 'E-posta',
        'password'       => 'Parola',
        'api-token'      => 'API jetonu',
        'api-token-help' => 'Regenerating your API token will prevent existing applications from accessing Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'User Level',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'Kullanıcı',
        ],
        '2fa' => [
            'help' => 'Enabling two factor authentication increases security of your account. You will need to download <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> or a similar app on to your mobile device. When you login you will be asked to provide a token generated by the app.',
        ],
        'team' => [
            'description' => 'E-posta adreslerini buraya girerek ekip üyelerini davet edin.',
            'email'       => 'E-posta #:id',
        ],
    ],

    // Buttons
    'add'    => 'Ekle',
    'save'   => 'Kaydet',
    'update' => 'Güncelle',
    'create' => 'Oluştur',
    'edit'   => 'Düzenle',
    'delete' => 'Sil',
    'submit' => 'Gönder',
    'cancel' => 'İptal',
    'remove' => 'Kaldır',
    'invite' => 'Davet et',
    'signup' => 'Kayıt Ol',

    // Other
    'optional' => '* İsteğe bağlı',
];
