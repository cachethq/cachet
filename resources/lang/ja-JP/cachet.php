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
    // Components
    'components' => [
        'last_updated' => '最終更新 :timestamp',
        'status'       => [
            0 => '不明',
            1 => '稼働中',
            2 => 'パフォーマンスに関する問題あり',
            3 => '一部停止中',
            4 => '大規模な停止中',
        ],
        'group' => [
            'other' => 'その他のサービス',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'         => '障害はありません',
        'past'         => '障害履歴',
        'stickied'     => '固定された障害',
        'scheduled'    => '計画メンテナンス',
        'scheduled_at' => ', 予定日時 :timestamp',
        'posted'       => '掲載日時 :timestamp',
        'posted_at'    => '掲載日時 :timestamp',
        'status'       => [
            1 => '調査中',
            2 => '特定済み',
            3 => '監視中',
            4 => '修正済み',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => '近日中',
            1 => '進行中',
            2 => '完了',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '全システムが正常に稼働しています',
        'bad'   => '一部のシステムに問題が発生しています',
        'major' => 'システムに深刻な問題が発生しています',
    ],

    'api' => [
        'regenerate' => 'APIキーの再生成',
        'revoke'     => 'APIキーの削除',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => '過去1時間',
            'hourly'    => '過去12時間',
            'weekly'    => '週',
            'monthly'   => '月',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'           => '最新の更新情報を購読する',
        'unsubscribe'         => '購読の解除',
        'button'              => '購読',
        'manage_subscription' => '購読の管理',
        'manage'              => [
            'no_subscriptions' => '現在、すべての更新情報を購読しています。',
            'my_subscriptions' => '現在、以下の更新情報を購読しています。',
            'manage_at_link'   => '購読の管理',
        ],
        'email' => [
            'subscribe'          => 'メールによるアップデート情報の購読',
            'subscribed'         => '既にこのメールアドレスは登録済みです。メールボックスを確認の上、認証を行ってください。',
            'verified'           => 'あなたのメール購読を確認しました。ありがとうございます！',
            'manage'             => '購読の管理',
            'unsubscribe'        => 'メール購読を解除する',
            'unsubscribed'       => 'メールの購読を解除しました。',
            'failure'            => '購読に失敗しました。',
            'already-subscribed' => '既に購読しているので :email の購読処理ができません。',
        ],
    ],

    'signup' => [
        'title'    => '新規登録',
        'username' => 'ユーザー名',
        'email'    => 'メールアドレス',
        'password' => 'パスワード',
        'success'  => 'アカウントが作成されました。',
        'failure'  => 'アカウントの作成に失敗しました。',
    ],

    'system' => [
        'update' => 'Cachetの新しいバージョンがあります。アップデートの方法については<a href="https://docs.cachethq.io/docs/updating-cachet">こちら</a>を参照して下さい！',
    ],

    // Modal
    'modal' => [
        'close'     => '閉じる',
        'subscribe' => [
            'title'  => 'コンポーネントのアップデート情報を購読する',
            'body'   => 'このサービスの稼働状況の更新情報を購読するにはメールアドレスを入力してください。',
            'button' => '購読',
        ],
    ],

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => ':dateに発生した:nameの障害の詳細情報',
            'schedule'  => ':startDateに予定している:nameのメンテナンスの詳細',
            'subscribe' => ':appの障害情報とメンテナンス情報を購読する',
            'overview'  => ':appからの最新の更新を得る',
        ],
    ],

    // Other
    'home'            => 'ホーム',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => '表示しているタイムゾーンは:timezoneです。',
    'about_this_site' => 'このサイトについて',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'ステータスフィード',

];
