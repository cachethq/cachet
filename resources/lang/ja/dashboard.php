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

    'dashboard' => 'ダッシュボード',

    // Incidents
    'incidents' => [
        'title'                    => 'インシデント &amp; スケジュール',
        'incidents'                => 'インシデント',
        'logged'                   => '{0} 良いですね。インシデントはありません。|インシデントを1件登録しました。|あなたはインシデントを <strong>:count 件</strong> 報告しています。',
        'incident-create-template' => 'テンプレートの作成',
        'incident-templates'       => 'インシデント・テンプレート',
        'add'                      => [
            'title'   => 'インシデントの報告',
            'success' => 'インシデントが追加されました。',
            'failure' => 'There was an error adding the incident, please try again.',
        ],
        'edit' => [
            'title'   => 'インシデントの編集',
            'success' => 'インシデントが更新されました。',
            'failure' => 'There was an error editing the incident, please try again.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted, please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'インシデント・テンプレート',
            'add'   => [
                'title'   => 'インシデントテンプレートの作成',
                'message' => 'You should add an incident template.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'テンプレートの編集',
                'success' => 'The incident template has been updated.',
                'failure' => 'Something went wrong updating the incident template',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted, please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '計画メンテナンス',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Scheduled at :timestamp',
        'add'          => [
            'title'   => 'Add Scheduled Maintenance',
            'success' => 'Schedule added.',
            'failure' => 'Something went wrong adding the schedule, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Scheduled Maintenance',
            'success' => 'Schedule has been updated!',
            'failure' => 'Something went wrong editing the schedule, please try again.',
        ],
        'delete' => [
            'success' => 'The scheduled maintenance has been deleted and will not show on your status page.',
            'failure' => 'The scheduled maintenance could not be deleted, please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'コンポーネント',
        'component_statuses' => 'コンポーネントのステータス',
        'listed_group'       => ':name グループに所属',
        'add'                => [
            'title'   => 'コンポーネントの追加',
            'message' => 'コンポーネントを追加してください。',
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'edit' => [
            'title'   => 'コンポーネントの編集',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'delete' => [
            'success' => 'コンポーネントが削除されました！',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'コンポーネントグループ',
            'no_components' => 'コンポーネントグループを追加して下さい',
            'add'           => [
                'title'   => 'コンポーネントグループの追加',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => 'コンポーネントグループの編集',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => 'コンポーネントグループが削除されました！',
                'failure' => 'The component group could not be deleted, please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'メトリクス',
        'add'     => [
            'title'   => 'メトリクスの作成',
            'message' => 'メトリクスを追加してください。',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'メトリクスの編集',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted, please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => '購読者',
        'description'      => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'verified'         => '認証済',
        'not_verified'     => '未確認',
        'subscriber'       => ':email, subscribed :date',
        'no_subscriptions' => 'Subscribed to all updates',
        'add'              => [
            'title'   => '購読者の追加',
            'success' => 'Subscriber has been added!',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
            'help'    => 'Enter each subscriber on a new line.',
        ],
        'edit' => [
            'title'   => '購読者の更新',
            'success' => 'Subscriber has been updated!',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'チーム',
        'member'      => 'メンバー',
        'profile'     => 'プロフィール',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => '新しいチームメンバーを追加する',
            'success' => 'Team member added.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'edit' => [
            'title'   => 'プロフィールの更新',
            'success' => 'Profile updated.',
            'failure' => 'Something went wrong updating the profile, please try again.',
        ],
        'delete' => [
            'success' => 'Team member has been deleted and will no longer have access to the dashboard!',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'invite' => [
            'title'   => '新しいチームメンバーを招待する',
            'success' => '招待メールが送信されました',
            'failure' => 'The invite could not be sent, please try again.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => '設定',
        'app-setup' => [
            'app-setup'   => 'アプリケーションのセットアップ',
            'images-only' => '画像のみアップロード可能です。',
            'too-big'     => 'ファイルサイズが大きすぎます。:size 以下の画像をアップロードしてください。',
        ],
        'analytics' => [
            'analytics' => 'アナリティクス',
        ],
        'localization' => [
            'localization' => 'ローカライズ',
        ],
        'customization' => [
            'customization' => 'Customization',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
        ],
        'security' => [
            'security'   => 'セキュリティ',
            'two-factor' => '二要素認証が無効になっているユーザー',
        ],
        'stylesheet' => [
            'stylesheet' => 'スタイルシート',
        ],
        'theme' => [
            'theme' => 'テーマ',
        ],
        'edit' => [
            'success' => '設定が保存されました。',
            'failure' => '設定が保存できませんでした。',
        ],
        'credits' => [
            'credits'       => 'Credits',
            'contributors'  => 'Contributors',
            'license'       => 'Cachet is a BSD-3-licensed open source project, released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Backers & Sponsors',
            'backers'       => 'If you\'d like to support future development, check out the CrowdIn and GitHub.',
            'thank-you'     => 'Thank you to each and every one of the :count contributors.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'ログイン',
        'logged_in'  => 'ログインしました。',
        'welcome'    => 'おかえりなさい！',
        'two-factor' => 'トークンを入力して下さい。',
    ],

    // Sidebar footer
    'help'        => 'ヘルプ',
    'status_page' => 'ステータスページ',
    'logout'      => 'ログアウト',

    // Notifications
    'notifications' => [
        'notifications' => '通知',
        'awesome'       => 'Awesome.',
        'whoops'        => 'おおっと',
    ],

    // Widgets
    'widgets' => [
        'news'             => 'Latest News',
        'news_subtitle'    => 'Get the latest updates',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'ステータスページにようこそ！',
        'message' => 'Your status page is almost ready! You might want to configure these extra settings',
        'close'   => 'Take me straight to my dashboard',
        'steps'   => [
            'component'  => 'コンポーネントの作成',
            'incident'   => 'インシデントの作成',
            'customize'  => 'カスタム設定',
            'team'       => 'ユーザーの追加',
            'api'        => 'APIトークンの生成',
            'two-factor' => '二要素認証',
        ],
    ],

];
