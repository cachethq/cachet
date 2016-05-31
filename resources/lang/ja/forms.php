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
        'email'            => 'メールアドレス',
        'username'         => 'ユーザー名',
        'password'         => 'パスワード',
        'site_name'        => 'サイト名',
        'site_domain'      => 'サイトのドメイン',
        'site_timezone'    => 'タイムゾーンの選択',
        'site_locale'      => '言語選択',
        'enable_google2fa' => 'Googleの2段階認証を有効にする',
        'cache_driver'     => 'キャッシュドライバー',
        'session_driver'   => 'セッションドライバー',
    ],

    // Login form fields
    'login' => [
        'login'         => 'ユーザー名またはメールアドレス',
        'email'         => 'メールアドレス',
        'password'      => 'パスワード',
        '2fauth'        => 'Authentication Code',
        'invalid'       => 'ユーザ名またはパスワードが違います',
        'invalid-token' => '無効なトークン',
        'cookies'       => 'ログインするにはクッキーを有効にする必要があります。',
        'rate-limit'    => 'Rate limit exceeded.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => '名前',
        'status'             => '状況',
        'component'          => 'コンポーネント',
        'message'            => 'Message',
        'message-help'       => 'You may also use Markdown.',
        'scheduled_at'       => 'When to schedule the maintenance for?',
        'incident_time'      => 'When did this incident occur?',
        'notify_subscribers' => 'Notify subscribers?',
        'visibility'         => 'Incident Visibility',
        'public'             => 'Viewable by public',
        'logged_in_only'     => 'Only visible to logged in users',
        'templates'          => [
            'name'     => '名前',
            'template' => 'Template',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => '名前',
        'status'      => '状況',
        'group'       => 'Group',
        'description' => 'Description',
        'link'        => 'Link',
        'tags'        => 'Tags',
        'tags-help'   => 'Comma separated.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'               => '名前',
            'collapsing'         => 'Choose visibility of the group',
            'visible'            => 'Always expanded',
            'collapsed'          => 'Collapse the group by default',
            'collapsed_incident' => 'Collapse the group, but expand if there are issues',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => '名前',
        'suffix'           => 'Suffix',
        'description'      => 'Description',
        'description-help' => 'You may also use Markdown.',
        'display-chart'    => 'Display chart on status page?',
        'default-value'    => 'Default value',
        'calc_type'        => 'Calculation of metrics',
        'type_sum'         => '合計',
        'type_avg'         => '平均',
        'places'           => 'Decimal places',
        'default_view'     => 'デフォルトのビュー',
        'threshold'        => 'How many minutes of threshold between metric points?',

        'points' => [
            'value' => '値',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'サイト名',
            'site-url'               => 'サイトのURL',
            'display-graphs'         => 'Display graphs on status page?',
            'about-this-page'        => 'このページについて',
            'days-of-incidents'      => '何日間のインシデントを表示しますか？',
            'banner'                 => 'Banner Image',
            'banner-help'            => "横幅が930px以内の画像をアップロードしてください。",
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
            'dashboard-login'         => 'ダッシュボードページへのリンクをフッター部分に表示しますか？',
            'reds'                    => 'レッド（エラー表示に使用されます）',
            'blues'                   => 'ブルー（インフォメーション表示に使用されます）',
            'greens'                  => 'グリーン（成功の表示に使用されます）',
            'yellows'                 => 'イエロー（アラート表示に使用されます）',
            'oranges'                 => 'オレンジ（通知表示に使用されます）',
            'metrics'                 => 'Metrics fill',
            'links'                   => 'リンク',
        ],
    ],

    'user' => [
        'username'       => 'ユーザー名',
        'email'          => 'メールアドレス',
        'password'       => 'パスワード',
        'api-token'      => 'APIトークン',
        'api-token-help' => 'Regenerating your API token will prevent existing applications from accessing Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'ユーザーレベル',
        'levels'         => [
            'admin' => '管理者',
            'user'  => 'ユーザー',
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
    'add'    => '追加',
    'save'   => '保存',
    'update' => '更新',
    'create' => '作成',
    'edit'   => '編集',
    'delete' => '削除',
    'submit' => '送信',
    'cancel' => 'キャンセル',
    'remove' => 'Remove',
    'invite' => '招待',
    'signup' => '新規登録',

    // Other
    'optional' => '※ 任意',
];
