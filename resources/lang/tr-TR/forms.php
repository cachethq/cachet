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
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Oturum Sürücüsü',
        'mail_driver'      => 'Posta Sürücü',
        'mail_host'        => 'Posta Hostu',
        'mail_address'     => 'Adresten Mail',
        'mail_username'    => 'Mail Kullanıcı Adı',
        'mail_password'    => 'Mail Şifresi',
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
        'rate-limit'    => 'Kullanım limiti aşıldı.',
        'remember_me'   => 'Beni hatırla',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'İsim',
        'status'             => 'Durum',
        'component'          => 'Bileşen',
        'message'            => 'Mesaj',
        'message-help'       => 'Markdown işaretleri kullanabilirsiniz.',
        'occurred_at'        => 'When did this incident occur?',
        'notify_subscribers' => 'Abonelere bildirilsin mi?',
        'visibility'         => 'Olay Görünürlüğü',
        'stick_status'       => 'Stick Incident',
        'stickied'           => 'Stickied',
        'not_stickied'       => 'Not Stickied',
        'public'             => 'Herkese açık',
        'logged_in_only'     => 'Sadece giriş yapan kullanıclar görebilir',
        'templates'          => [
            'name'     => 'İsim',
            'template' => 'Tema',
            'twig'     => 'Olay Şablonları\'nan <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> şablon dili faydalanabilir.',
        ],
    ],

    'schedules' => [
        'name'         => 'İsim',
        'status'       => 'Durum',
        'message'      => 'Mesaj',
        'message-help' => 'Markdown işaretleri kullanabilirsiniz.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => 'İsim',
            'template' => 'Tema',
            'twig'     => 'Olay Şablonları\'nan <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> şablon dili faydalanabilir.',
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
        'enabled'     => 'Bileşen etkinleştirilsin mi?',

        'groups' => [
            'name'                     => 'İsim',
            'collapsing'               => 'Seçenkleri Genişlet/Daralt',
            'visible'                  => 'Her zaman genişlet',
            'collapsed'                => 'Grubu varsayılan olarak daralt',
            'collapsed_incident'       => 'Grubu küçült, ancak sorun olursa genişlet',
            'visibility'               => 'Visibility',
            'visibility_public'        => 'Visible to public',
            'visibility_authenticated' => 'Visible only to logged in users',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'İsim',
        'description'        => 'Açıklama',
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
        'name'                     => 'İsim',
        'suffix'                   => 'Suffix',
        'description'              => 'Açıklama',
        'description-help'         => 'Markdown işaretleri kullanabilirsiniz.',
        'display-chart'            => 'Display chart on status page?',
        'default-value'            => 'Varsayılan değer',
        'calc_type'                => 'Calculation of metrics',
        'type_sum'                 => 'Toplam',
        'type_avg'                 => 'Ortalama',
        'places'                   => 'Decimal places',
        'default_view'             => 'Default view',
        'threshold'                => 'How many minutes of threshold between metric points?',
        'visibility'               => 'Visibility',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => 'Değer',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                    => 'Site Adı',
            'site-url'                     => 'Site url adresi',
            'display-graphs'               => 'Display graphs on status page?',
            'about-this-page'              => 'Hakkında',
            'days-of-incidents'            => 'How many days of incidents to show?',
            'banner'                       => 'Banner Image',
            'banner-help'                  => "It's recommended that you upload files no bigger than 930px wide .",
            'subscribers'                  => 'Allow people to signup to email notifications?',
            'skip_subscriber_verification' => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'       => 'Automatically localise your status page to your visitor\'s language?',
            'enable_external_dependencies' => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                => 'Show the timezone the status page is running in.',
            'only_disrupted_days'          => 'Only show days containing incidents in the timeline?',
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

    'general' => [
        'timezone' => 'Select Timezone',
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
