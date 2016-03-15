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
            'success' => 'インシデントが登録されました。',
            'failure' => 'インシデントの登録ができませんでした。もう一度試してみてください。',
        ],
        'edit' => [
            'title'   => 'インシデントの編集',
            'success' => 'インシデントが更新されました。',
            'failure' => 'The incident could not be edited. Please try again.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted. Please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'インシデント・テンプレート',
            'add'   => [
                'title'   => 'インシデントテンプレートの作成',
                'message' => 'You should add an incident template.',
                'success' => 'The incdent template has been created!',
                'failure' => 'The incident template could not be created. Please try again.',
            ],
            'edit' => [
                'title'   => 'テンプレートの編集',
                'success' => 'The incdent template has been updated!',
                'failure' => 'The incident template could not be edited. Please try again.',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '計画メンテナンス',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Scheduled at :timestamp',
        'add'          => [
            'title'   => '計画メンテナンスの追加',
            'success' => '計画メンテナンスが追加されました！',
            'failure' => '計画メンテナンスの追加ができませんでした。もう一度試してみてください。',
        ],
        'edit' => [
            'title'   => '計画メンテナンスの編集',
            'success' => '計画メンテナンスが編集されました！',
            'failure' => '計画メンテナンスの編集ができませんでした。もう一度試してみてください。',
        ],
        'delete' => [
            'success' => '計画メンテナンスが削除されました！',
            'failure' => '計画メンテナンスの削除ができませんでした。もう一度試してみてください。',
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
            'success' => 'コンポーネントが追加されました！',
            'failure' => 'コンポーネントの追加ができませんでした。もう一度試してみてください。',
        ],
        'edit' => [
            'title'   => 'コンポーネントの編集',
            'success' => 'コンポーネントが更新されました！',
            'failure' => 'コンポーネントの更新ができませんでした。もう一度試してみてください。',
        ],
        'delete' => [
            'success' => 'コンポーネントが削除されました！',
            'failure' => 'コンポーネントの削除ができませんでした。もう一度試してみてください。',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'コンポーネントグループ',
            'no_components' => 'コンポーネントグループを追加して下さい',
            'add'           => [
                'title'   => 'コンポーネントグループの追加',
                'success' => 'コンポーネントグループが追加されました！',
                'failure' => 'コンポーネントグループの追加ができませんでした。もう一度試してみてください。',
            ],
            'edit' => [
                'title'   => 'コンポーネントグループの編集',
                'success' => 'コンポーネントグループが編集されました！',
                'failure' => 'コンポーネントグループの編集ができませんでした。もう一度試してみてください。',
            ],
            'delete' => [
                'success' => 'コンポーネントグループが削除されました！',
                'failure' => 'コンポーネントグループの削除ができませんでした。もう一度試してみてください。',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'メトリクス',
        'add'     => [
            'title'   => 'メトリクスの作成',
            'message' => 'メトリクスを追加してください。',
            'success' => 'メトリクスが追加されました！',
            'failure' => 'メトリクスの追加ができませんでした。もう一度試してみてください。',
        ],
        'edit' => [
            'title'   => 'メトリクスの編集',
            'success' => 'メトリクスが更新されました！',
            'failure' => 'The metric could not be updated. Please try again.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => '購読者',
        'description'  => 'Subscribers will receive email updates when incidents are created.',
        'verified'     => '認証済',
        'not_verified' => '未確認',
        'add'          => [
            'title'   => '購読者の追加',
            'success' => 'Subscriber has been added!',
            'failure' => 'The subscriber could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => '購読者の更新',
            'success' => 'Subscriber has been updated!',
            'failure' => 'The subscriber could not be updated. Please try again.',
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
            'success' => 'Team member has been added!',
            'failure' => 'The team member could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => 'プロフィールの更新',
            'success' => 'Team member has been updated!',
            'failure' => 'The team member could not be updated. Please try again.',
        ],
        'delete' => [
            'success' => 'Team member has been deleted and will no longer have access to the dashboard!',
            'failure' => 'The team member could not be added. Please try again.',
        ],
        'invite' => [
            'title'   => '新しいチームメンバーを招待する',
            'success' => '招待メールが送信されました',
            'failure' => '招待メールが送信できませんでした。もう一度試してみてください。',
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

    // Welcome modal
    'welcome' => [
        'welcome' => 'ステータスページにようこそ！',
        'message' => 'Your status page is almost ready! You might want to configure these extra settings',
        'close'   => 'Just go straight to my dashboard',
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
