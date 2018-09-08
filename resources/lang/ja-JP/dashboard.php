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

    'dashboard'          => 'ダッシュボード',
    'writeable_settings' => 'Cachetの設定ディレクトリに書き込み権限がありません。<code>./bootstrap/cachet</code>に書き込み権限を付与してください。',

    // Incidents
    'incidents' => [
        'title'                    => '障害・メンテナンス',
        'incidents'                => '障害',
        'logged'                   => '{0}登録されている障害情報はありません。|[1]障害情報が1つ登録されています。|[2,*]障害情報が<strong>:count</strong>つ登録されています。',
        'incident-create-template' => 'テンプレートを作成',
        'incident-templates'       => '障害情報のテンプレート',
        'updates'                  => [
            'title'   => 'Incident updates for :incident',
            'count'   => '{0}Zero Updates|[1]One Update|[2]Two Updates|[3,*]Several Updates',
            'add'     => [
                'title'   => 'Create new incident update',
                'success' => 'Your new incident update has been created.',
                'failure' => 'Something went wrong with the incident update.',
            ],
            'edit' => [
                'title'   => 'Edit incident update',
                'success' => 'The incident update has been updated.',
                'failure' => 'Something went wrong updating the incident update',
            ],
        ],
        'reported_by'              => ':userによって報告されました',
        'add'                      => [
            'title'   => '障害情報の報告',
            'success' => '障害情報が追加されました。',
            'failure' => '障害情報の登録に失敗しました。もう一度お試し下さい。',
        ],
        'edit' => [
            'title'   => '障害情報の編集',
            'success' => '障害情報が更新されました。',
            'failure' => '障害情報の編集に失敗しました。もう一度お試し下さい。。',
        ],
        'delete' => [
            'success' => '障害情報がステータスページから削除しました。',
            'failure' => '障害情報の削除に失敗しました。もう一度お試し下さい。',
        ],

 // Incident templates
        'templates' => [
            'title' => 'テンプレート',
            'add'   => [
                'title'   => 'テンプレートの作成',
                'message' => 'テンプレートの作成を行えます。',
                'success' => 'テンプレートの作成に成功しました。',
                'failure' => 'テンプレートの作成に失敗しました。',
            ],
            'edit' => [
                'title'   => 'テンプレートの編集',
                'success' => 'テンプレートの編集に成功しました。',
                'failure' => 'テンプレートの編集に失敗しました。',
            ],
            'delete' => [
                'success' => 'テンプレートを削除しました。',
                'failure' => 'テンプレートの削除に失敗しました。もう一度お試し下さい。',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'メンテナンス計画',
        'logged'       => '{0} 現在計画されているメンテナンスはありません。|現在1つメンテナンスが計画されています。|現在 <strong>:count</strong> つメンテナンスが計画されています。',
        'scheduled_at' => 'メンテナンス開始時刻 :timestamp',
        'add'          => [
            'title'   => 'メンテナンス計画を追加',
            'success' => 'メンテナンス計画を追加しました。',
            'failure' => 'メンテナンス計画の追加に失敗しました。もう一度お試し下さい。',
        ],
        'edit' => [
            'title'   => 'メンテナンス計画を編集',
            'success' => 'メンテナンス計画を編集しました。',
            'failure' => 'メンテナンス計画の編集に失敗しました。もう一度お試し下さい。',
        ],
        'delete' => [
            'success' => 'メンテナンス計画をステータスページから削除しました。',
            'failure' => 'メンテナンス計画の削除に失敗しました。もう一度お試し下さい。',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'サービス',
        'component_statuses' => 'サービスのステータス',
        'listed_group'       => ':name グループに所属',
        'add'                => [
            'title'   => 'サービスの追加',
            'message' => 'ステータスページに表示するサービスを追加してください。',
            'success' => 'サービスを追加しました。',
            'failure' => 'サービスの追加に失敗しました。もう一度お試し下さい。',
        ],
        'edit' => [
            'title'   => 'サービスの編集',
            'success' => 'サービスを編集しました。',
            'failure' => 'サービスの編集に失敗しました。もう一度お試し下さい。',
        ],
        'delete' => [
            'success' => 'サービスを削除しました。',
            'failure' => 'サービスの削除に失敗しました。もう一度お試し下さい。',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'サービスグループ',
            'no_components' => 'サービスグループを追加して下さい',
            'add'           => [
                'title'   => 'サービスグループの追加',
                'success' => 'サービスグループを追加しました。',
                'failure' => 'サービスグループの追加に失敗しました。もう一度お試し下さい。',
            ],
            'edit' => [
                'title'   => 'サービスグループの編集',
                'success' => 'サービスグループを編集しました。',
                'failure' => 'サービスグループの編集に失敗しました。もう一度お試し下さい。',
            ],
            'delete' => [
                'success' => 'サービスグループを削除しました。',
                'failure' => 'サービスグループの削除に失敗しました。もう一度お試し下さい。',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => '評価基準',
        'add'     => [
            'title'   => '評価基準の作成',
            'message' => '評価基準を追加してください。',
            'success' => '評価基準を追加しました。',
            'failure' => '評価基準の追加に失敗しました。もう一度お試し下さい。',
        ],
        'edit' => [
            'title'   => '評価基準の編集',
            'success' => '評価基準を編集しました。',
            'failure' => '評価基準の編集に失敗しました。もう一度お試し下さい。',
        ],
        'delete' => [
            'success' => '評価基準を削除しました。',
            'failure' => '評価基準の削除に失敗しました。もう一度お試し下さい。',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => '購読者',
        'description'      => '稼働状況が更新されると購読者にメールが送信されます。',
        'description_disabled' => 'To use this feature, you need allow people to signup for notifications.',
        'verified'         => '認証済',
        'not_verified'     => '未認証',
        'subscriber'       => ':email, 購読開始日 :date',
        'no_subscriptions' => '全ての更新を購読しています。',
        'global'               => 'Globally subscribed',
        'add'              => [
            'title'   => '購読者の追加',
            'success' => '購読者を追加しました。',
            'failure' => '購読者の追加に失敗しました。もう一度お試し下さい。',
            'help'    => '購読者のメールアドレスを一行ごとに入力して下さい。',
        ],
        'edit' => [
            'title'   => '購読者の更新',
            'success' => '購読者を更新しました。',
            'failure' => '購読者の更新に失敗しました。もう一度お試し下さい。',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'チーム',
        'member'      => 'メンバー',
        'profile'     => 'プロフィール',
        'description' => 'チームメンバーを追加すると、サービスや障害情報の追加、編集をチームで行うことができます。',
        'add'         => [
            'title'   => '新しいチームメンバーを追加する',
            'success' => 'チームメンバーを追加しました。',
            'failure' => 'チームメンバーを追加できませんでした。もう一度お試し下さい。',
        ],
        'edit' => [
            'title'   => 'プロフィールの更新',
            'success' => 'プロフィールを更新しました。',
            'failure' => 'プロフィールの更新に失敗しました。もう一度お試し下さい。',
        ],
        'delete' => [
            'success' => 'チームメンバーを削除しました。これにより削除されたメンバーは管理画面のアクセスができなくなります。',
            'failure' => 'チームメンバーの削除に失敗しました。もう一度お試し下さい。',
        ],
        'invite' => [
            'title'   => '新しいチームメンバーを招待する',
            'success' => '招待メールが送信されました。',
            'failure' => '招待メールの送信に失敗しました。もう一度お試し下さい。',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => '設定',
        'app-setup' => [
            'app-setup'   => '一般設定',
            'images-only' => '画像のみアップロード可能です。',
            'too-big'     => 'ファイルサイズが大きすぎます。:size 以下の画像をアップロードしてください。',
        ],
        'analytics' => [
            'analytics' => 'アクセス解析',
        ],
        'log' => [
            'log' => 'ログ',
        ],
        'localization' => [
            'localization' => '言語設定',
        ],
        'customization' => [
            'customization' => 'カスタマイズ',
            'header'        => 'ヘッダーHTML',
            'footer'        => 'フッターHTML',
        ],
        'mail' => [
            'mail'  => 'メール',
            'test'  => '送信テスト',
            'email' => [
                'subject' => 'Cachetテストメール',
                'body'    => 'このメールはCachetのテストメールです。',
            ],
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
            'credits'       => 'クレジット',
            'contributors'  => '貢献者',
            'license'       => 'Cachetは BSD-3ライセンスのオープンソースプロジェクトです。released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => '支持者 & スポンサー',
            'backers'       => '開発に興味をお持ちの場合は次をご確認ください。 <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> キャンペーン',
            'thank-you'     => 'Cachetに携わった:count 人にお礼申し上げます。',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'ログイン',
        'logged_in'  => 'ログインしました。',
        'welcome'    => 'ようこそ！',
        'two-factor' => 'トークンを入力して下さい。',
    ],

    // Sidebar footer
    'help'        => 'ヘルプ',
    'status_page' => 'ステータスページ',
    'logout'      => 'ログアウト',

    // Notifications
    'notifications' => [
        'notifications' => '通知',
        'awesome'       => '正常に処理できました。',
        'whoops'        => 'おおっと',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Cachetサポート',
        'support_subtitle' => '次の<strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong>ページをご確認ください。',
        'news'             => '更新情報',
        'news_subtitle'    => '最新のニュースはこちらから',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'ステータスページにようこそ！',
        'message' => 'あと少しでステータスページが完成します！残りの設定を行って下さい。',
        'close'   => 'これで完成です！ステータスページへ行きましょう！',
        'steps'   => [
            'component'  => 'サービスの作成',
            'incident'   => '障害情報の作成',
            'customize'  => 'カスタマイズ',
            'team'       => 'ユーザーの追加',
            'api'        => 'APIトークンの生成',
            'two-factor' => '二要素認証',
        ],
    ],

];
