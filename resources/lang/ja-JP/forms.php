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
        'username'         => 'ユーザー名',
        'password'         => 'パスワード',
        'site_name'        => 'サイト名',
        'site_domain'      => 'サイトのドメイン',
        'site_timezone'    => 'タイムゾーンの選択',
        'site_locale'      => '言語選択',
        'enable_google2fa' => 'Googleの2段階認証を有効にする',
        'cache_driver'     => 'キャッシュドライバー',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'セッションドライバー',
        'mail_driver'      => 'Mail Driver',
        'mail_host'        => 'Mail Host',
        'mail_address'     => 'Mail From Address',
        'mail_username'    => 'Mail Username',
        'mail_password'    => 'Mail Password',
    ],

    // Login form fields
    'login' => [
        'login'         => 'ユーザー名またはメールアドレス',
        'email'         => 'Email',
        'password'      => 'パスワード',
        '2fauth'        => '認証コード',
        'invalid'       => 'ユーザ名またはパスワードが違います',
        'invalid-token' => '無効なトークン',
        'cookies'       => 'ログインするにはクッキーを有効にする必要があります。',
        'rate-limit'    => 'Rate limit exceeded.',
        'remember_me'   => 'Remember me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => '名前',
        'status'             => '状況',
        'component'          => 'コンポーネント',
        'message'            => 'メッセージ',
        'message-help'       => 'You may also use Markdown.',
        'occurred_at'        => 'When did this incident occur?',
        'notify_subscribers' => 'Notify subscribers?',
        'visibility'         => 'Incident Visibility',
        'stick_status'       => 'Stick Incident',
        'stickied'           => 'Stickied',
        'not_stickied'       => 'Not Stickied',
        'public'             => 'Viewable by public',
        'logged_in_only'     => 'Only visible to logged in users',
        'templates'          => [
            'name'     => '名前',
            'template' => 'テンプレート',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    'schedules' => [
        'name'         => '名前',
        'status'       => '状況',
        'message'      => 'メッセージ',
        'message-help' => 'You may also use Markdown.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => '名前',
            'template' => 'テンプレート',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => '名前',
        'status'      => '状況',
        'group'       => 'グループ',
        'description' => '説明',
        'link'        => 'リンク',
        'tags'        => 'タグ',
        'tags-help'   => 'カンマ区切り。',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'                     => '名前',
            'collapsing'               => 'Expand/Collapse options',
            'visible'                  => '常に展開する',
            'collapsed'                => 'Collapse the group by default',
            'collapsed_incident'       => 'Collapse the group, but expand if there are issues',
            'visibility'               => 'Visibility',
            'visibility_public'        => 'Visible to public',
            'visibility_authenticated' => 'Visible only to logged in users',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => '名前',
        'description'        => '説明',
        'start_at'           => 'Schedule start time',
        'timezone'           => 'タイムゾーン',
        'schedule_frequency' => 'Schedule frequency (in seconds)',
        'completion_latency' => 'Completion latency (in seconds)',
        'group'              => 'グループ',
        'active'             => 'Active?',
        'groups'             => [
            'name' => 'グループ名',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => '名前',
        'suffix'                   => 'サフィックス',
        'description'              => '説明',
        'description-help'         => 'You may also use Markdown.',
        'display-chart'            => 'Display chart on status page?',
        'default-value'            => 'デフォルト値',
        'calc_type'                => 'Calculation of metrics',
        'type_sum'                 => '合計',
        'type_avg'                 => '平均',
        'places'                   => 'Decimal places',
        'default_view'             => 'デフォルトのビュー',
        'threshold'                => 'How many minutes of threshold between metric points?',
        'visibility'               => 'Visibility',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => '値',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                    => 'サイト名',
            'site-url'                     => 'サイトのURL',
            'display-graphs'               => 'Display graphs on status page?',
            'about-this-page'              => 'このページについて',
            'days-of-incidents'            => '何日間のインシデントを表示しますか？',
            'time_before_refresh'          => 'Status page refresh rate (in seconds).',
            'banner'                       => 'バナー画像',
            'banner-help'                  => '横幅が930px以内の画像をアップロードしてください。',
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
            'site-timezone'        => 'サイトのタイム ゾーン',
            'site-locale'          => 'サイトの言語',
            'date-format'          => '日付フォーマット',
            'incident-date-format' => 'Incident timestamp format',
        ],
        'security' => [
            'allowed-domains'      => '許可されているドメイン',
            'allowed-domains-help' => 'Comma separated. The domain set above is automatically allowed by default.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => '背景色',
            'background-fills'        => 'Background fills (components, incidents, footer)',
            'banner-background-color' => 'Banner background color',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Text color',
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
        'email'          => 'Email',
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

    'general' => [
        'timezone' => 'Select Timezone',
    ],

    // Buttons
    'add'            => '追加',
    'save'           => '保存',
    'update'         => '更新',
    'create'         => '作成',
    'edit'           => '編集',
    'delete'         => '削除',
    'submit'         => '送信',
    'cancel'         => 'キャンセル',
    'remove'         => '削除',
    'invite'         => '招待',
    'signup'         => '新規登録',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '※ 任意',
];
