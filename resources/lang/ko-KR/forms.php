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
        'username'         => 'Username',
        'password'         => 'Password',
        'site_name'        => 'Site Name',
        'site_domain'      => 'Site Domain',
        'site_timezone'    => 'Select your timezone',
        'site_locale'      => 'Select your language',
        'enable_google2fa' => 'Enable Google Two Factor Authentication',
        'cache_driver'     => 'Cache Driver',
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
        'email'         => 'Email',
        'password'      => 'Password',
        '2fauth'        => 'Authentication Code',
        'invalid'       => 'Invalid username or password',
        'invalid-token' => '잘못된 토큰n',
        'cookies'       => 'You must enable cookies to login.',
        'rate-limit'    => 'Rate limit exceeded.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Name',
        'status'             => 'Status',
        'component'          => '구성요소',
        'message'            => '메시지',
        'message-help'       => 'You may also use Markdown.',
        'scheduled_at'       => 'When to schedule the maintenance for?',
        'incident_time'      => 'When did this incident occur?',
        'notify_subscribers' => '구독자에게 알림',
        'visibility'         => 'Incident Visibility',
        'public'             => 'Viewable by public',
        'logged_in_only'     => '로그인한 사용자만 볼 수 있음',
        'templates'          => [
            'name'     => 'Name',
            'template' => 'Template',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Name',
        'status'      => 'Status',
        'group'       => 'Group',
        'description' => 'Description',
        'link'        => 'Link',
        'tags'        => 'Tags',
        'tags-help'   => '쉼표로 구분.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'               => 'Name',
            'collapsing'         => 'Choose visibility of the group',
            'visible'            => 'Always expanded',
            'collapsed'          => 'Collapse the group by default',
            'collapsed_incident' => 'Collapse the group, but expand if there are issues',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Name',
        'suffix'           => 'Suffix',
        'description'      => 'Description',
        'description-help' => 'You may also use Markdown.',
        'display-chart'    => '상태 페이지에 차트 보이기',
        'default-value'    => '기본값',
        'calc_type'        => '통계 계산',
        'type_sum'         => 'Sum',
        'type_avg'         => 'Average',
        'places'           => 'Decimal places',
        'default_view'     => 'Default view',
        'threshold'        => 'How many minutes of threshold between metric points?',

        'points' => [
            'value' => 'Value',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Site Name',
            'site-url'               => 'Site URL',
            'display-graphs'         => '상태 페이지에 그래프 보이기',
            'about-this-page'        => 'About this page',
            'days-of-incidents'      => 'How many days of incidents to show?',
            'banner'                 => 'Banner Image',
            'banner-help'            => "It's recommended that you upload files no bigger than 930px wide .",
            'subscribers'            => '이메일 알림을 받기 위한 회원가입 허용',
            'automatic_localization' => 'Automatically localise your status page to your visitor\'s language?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics 코드',
            'analytics_gosquared'    => 'GoSquared Analytics 코드',
            'analytics_piwik_url'    => 'Piwik 인스턴스의 URL ( "http(s)://" 제외 )',
            'analytics_piwik_siteid' => 'Piwik 사이트 id',
        ],
        'localization' => [
            'site-timezone'        => '사이트 시간대',
            'site-locale'          => '사이트 언어',
            'date-format'          => '날짜 형식',
            'incident-date-format' => '문제 Timestamp 형식',
        ],
        'security' => [
            'allowed-domains'      => '허용된 도메인',
            'allowed-domains-help' => '쉼표로 구분. 위에 설정된 도메인은 기본적으로 자동 허용 됩니다.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background Color',
            'background-fills'        => 'Background fills (components, incidents, footer)',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
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
        'email'          => 'Email',
        'password'       => 'Password',
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
    'update' => '수정',
    'create' => '생성',
    'edit'   => '수정',
    'delete' => 'Delete',
    'submit' => 'Submit',
    'cancel' => 'Cancel',
    'remove' => 'Remove',
    'invite' => 'Invite',
    'signup' => 'Sign Up',

    // Other
    'optional' => '* 선택사항',
];
