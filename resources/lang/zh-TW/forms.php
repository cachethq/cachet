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
        'email'            => '電郵地址',
        'username'         => '用戶名',
        'password'         => '密碼',
        'site_name'        => '網站名稱',
        'site_domain'      => '網站域名',
        'site_timezone'    => '選擇你的時區',
        'site_locale'      => '選擇你的語言',
        'enable_google2fa' => '啟用 Google 兩步驗證',
        'cache_driver'     => 'Cache Driver',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Session Driver',
        'mail_driver'      => 'Mail Driver',
        'mail_host'        => 'Mail Host',
        'mail_address'     => 'Mail From Address',
        'mail_username'    => 'Mail Username',
        'mail_password'    => 'Mail Password',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username or Email',
        'email'         => '電郵地址',
        'password'      => '密碼',
        '2fauth'        => '驗證碼',
        'invalid'       => 'Invalid username or password',
        'invalid-token' => '錯誤的驗證碼',
        'cookies'       => 'You must enable cookies to login.',
        'rate-limit'    => 'Rate limit exceeded.',
        'remember_me'   => 'Remember me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => '名稱',
        'status'             => '狀態',
        'component'          => '組件',
        'component_status'   => 'Component Status',
        'message'            => '訊息',
        'message-help'       => '你可以使用 Markdown 。',
        'occurred_at'        => 'When did this incident occur?',
        'notify_subscribers' => 'Notify subscribers?',
        'notify_disabled'    => 'Due to scheduled maintenance, notifications about this incident or its components will be suppressed.',
        'visibility'         => 'Incident Visibility',
        'stick_status'       => 'Stick Incident',
        'stickied'           => 'Stickied',
        'not_stickied'       => 'Not Stickied',
        'public'             => 'Viewable by public',
        'logged_in_only'     => 'Only visible to logged in users',
        'templates'          => [
            'name'     => '名稱',
            'template' => '範本',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    'schedules' => [
        'name'         => '名稱',
        'status'       => '狀態',
        'message'      => '訊息',
        'message-help' => '你可以使用 Markdown 。',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => '名稱',
            'template' => '範本',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => '名稱',
        'status'      => '狀態',
        'group'       => '組別',
        'description' => '描述',
        'link'        => '連結',
        'tags'        => '標籤',
        'tags-help'   => '請以半角逗號分隔。',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'                     => '名稱',
            'collapsing'               => 'Expand/Collapse options',
            'visible'                  => 'Always expanded',
            'collapsed'                => 'Collapse the group by default',
            'collapsed_incident'       => 'Collapse the group, but expand if there are issues',
            'visibility'               => 'Visibility',
            'visibility_public'        => 'Visible to public',
            'visibility_authenticated' => 'Visible only to logged in users',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => '名稱',
        'description'        => '描述',
        'start_at'           => 'Schedule start time',
        'timezone'           => 'Timezone',
        'schedule_frequency' => 'Schedule frequency (in seconds)',
        'completion_latency' => 'Completion latency (in seconds)',
        'group'              => '組別',
        'active'             => 'Active?',
        'groups'             => [
            'name' => 'Group Name',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => '名稱',
        'suffix'                   => '後綴',
        'description'              => '描述',
        'description-help'         => '你可以使用 Markdown 。',
        'display-chart'            => '在狀態頁上顯示圖表？',
        'default-value'            => 'Default value',
        'calc_type'                => 'Calculation of metrics',
        'type_sum'                 => '總和',
        'type_avg'                 => '平均',
        'places'                   => 'Decimal places',
        'default_view'             => 'Default view',
        'threshold'                => 'How many minutes of threshold between metric points?',
        'visibility'               => 'Visibility',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => '值',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => '網站名稱',
            'site-url'                              => '網站 URL',
            'display-graphs'                        => '在狀態頁上顯示圖片？',
            'about-this-page'                       => '關於本站',
            'days-of-incidents'                     => '顯示多少天前的事件？',
            'time_before_refresh'                   => 'Status page refresh rate (in seconds)',
            'major_outage_rate'                     => 'Major outage threshold (in %)',
            'banner'                                => 'Banner Image',
            'banner-help'                           => "It's recommended that you upload files no bigger than 930px wide",
            'subscribers'                           => 'Allow people to signup to email notifications?',
            'suppress_notifications_in_maintenance' => 'Suppress notifications when incident occurs during maintenance period?',
            'skip_subscriber_verification'          => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'                => 'Automatically localise your status page to your visitor\'s language?',
            'enable_external_dependencies'          => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                         => 'Show the timezone the status page is running in',
            'only_disrupted_days'                   => 'Only show days containing incidents in the timeline?',
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
            'allowed-domains-help'      => '請以半角逗號分隔。以上域名將會自動允許訪問。',
            'always-authenticate'       => 'Always authenticate',
            'always-authenticate-help'  => 'Require login to view any Cachet page',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background color',
            'background-fills'        => 'Background fills (components, incidents, footer)',
            'banner-background-color' => 'Banner background color',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Enable full width banner?',
            'text-color'              => 'Text color',
            'dashboard-login'         => 'Show dashboard button in the footer?',
            'reds'                    => '紅（用於錯誤類提示)',
            'blues'                   => 'Blue (used for information)',
            'greens'                  => 'Green (used for success)',
            'yellows'                 => 'Yellow (used for alerts)',
            'oranges'                 => 'Orange (used for notices)',
            'metrics'                 => 'Metrics fill',
            'links'                   => 'Links',
        ],
    ],

    'user' => [
        'username'       => '用戶名',
        'email'          => '電郵地址',
        'password'       => '密碼',
        'api-token'      => 'API 密鑰',
        'api-token-help' => '重新生成 API 密鑰將會導致現存的應用程序無法訪問 Cachet 。',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'User Level',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'User',
        ],
        '2fa' => [
            'help' => '啟用兩步認證會使得你的賬戶更加安全。您需要下載 <a href="https://support.google.com/accounts/answer/1066447?hl=zh-hant">Google Authenticator</a> 或類似的應用程序到您的設備上。啓用後，你需要提供由該應用程序生成的驗證碼方可登錄。',
        ],
        'team' => [
            'description' => 'Invite your team members by entering their email addresses here.',
            'email'       => 'Your Team Members Email Address',
        ],
    ],

    'general' => [
        'timezone' => 'Select Timezone',
    ],

    'seo' => [
        'title'        => 'SEO Title',
        'description'  => 'SEO Description',
    ],

    // Buttons
    'add'            => '增加',
    'save'           => '儲存',
    'update'         => '更新',
    'create'         => '建立',
    'edit'           => '編輯',
    'delete'         => '刪除',
    'submit'         => '送出',
    'cancel'         => '取消',
    'remove'         => '移除',
    'invite'         => 'Invite',
    'signup'         => 'Sign Up',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* 可選項目',
];
