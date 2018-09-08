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
    'component' => [
        'status_update' => [
            'mail' => [
                'subject'  => 'サービスの稼働状況が更新されました',
                'greeting' => 'サービスの稼働状況が更新されました。',
                'content'  => ':name の稼働状況が :old_status から :new_status になりました。',
                'action'   => '詳しく見る',
            ],
            'slack' => [
                'title'   => 'サービスの稼働状況が更新されました。',
                'content' => ':name の稼働状況が :old_status から :new_status になりました。',
            ],
            'sms' => [
                'content' => ':name の稼働状況が :old_status から :new_status になりました。',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => '障害発生の報告',
                'greeting' => ':app_name で障害が発生したことが報告されました。',
                'content'  => '障害は :name によって報告されました。',
                'action'   => '詳しく見る',
            ],
            'slack' => [
                'title'   => '障害は :name によって報告されました。',
                'content' => ':app_name で障害が発生したことが報告されました。',
            ],
            'sms' => [
                'content' => ':app_name で障害が発生したことが報告されました。',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => '障害情報が更新されました',
                'content' => ':name によって稼働状況が更新されました。',
                'title'   => ':name が稼働状況を :new_status に更新しました。',
                'action'  => '詳しく見る',
            ],
            'slack' => [
                'title'   => ':name によって稼働状況が更新されました。',
                'content' => ':name が稼働状況を :new_status に更新しました。',
            ],
            'sms' => [
                'content' => ':name によって稼働状況が更新されました。',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => '新しいスケジュールが作成されました',
                'content' => ':name が :date にスケジュールを設定しました。',
                'title'   => '新しいメンテナンス計画が作成されました。',
                'action'  => '詳しく見る',
            ],
            'slack' => [
                'title'   => '新しいスケジュールが作成されました',
                'content' => ':name が :date にスケジュールを設定しました。',
            ],
            'sms' => [
                'content' => ':name が :date にスケジュールを設定しました。',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => '購読処理を完了させてください',
                'content' => ':app_name の更新情報を受け取るには、メールアドレスの認証を完了させてください。',
                'title'   => ':app_name の更新情報を受け取るには、メールアドレスの認証を完了させてください。',
                'action'  => 'メールアドレスを認証する',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Cachetからのお知らせ',
                'content' => 'この通知はCachetによるテストです。',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => '[Cachet]チームに招待されました',
                'content' => ':app_name のチームに招待されました。招待を完了するには、以下から登録して下さい。',
                'title'   => ':app_name のチームに招待されました。招待を完了するには、以下から登録して下さい。',
                'action'  => '招待を受ける',
            ],
        ],
    ],
];
