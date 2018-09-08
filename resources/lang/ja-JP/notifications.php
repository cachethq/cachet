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
                'content'  => ':nameの稼働状況が:old_statusから:new_statusになりました。',
                'action'   => '詳しく見る',
            ],
            'slack' => [
                'title'   => 'サービスの稼働状況が更新されました。',
                'content' => ':nameの稼働状況が:old_statusから:new_statusになりました。',
            ],
            'sms' => [
                'content' => ':nameの稼働状況が:old_statusから:new_statusになりました。',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => '障害発生の報告',
                'greeting' => ':app_nameで障害が発生したことが報告されました。',
                'content'  => '障害は:nameによって報告されました。',
                'action'   => '詳しく見る',
            ],
            'slack' => [
                'title'   => '障害は:nameによって報告されました。',
                'content' => ':app_nameで障害が発生したことが報告されました。',
            ],
            'sms' => [
                'content' => ':app_nameで障害が発生したことが報告されました。',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => '障害情報が更新されました',
                'content' => ':nameによって稼働状況が更新されました。',
                'title'   => ':nameが稼働状況を:new_statusに更新しました。',
                'action'  => '詳しく見る',
            ],
            'slack' => [
                'title'   => ':nameによって稼働状況が更新されました。',
                'content' => ':nameが稼働状況を:new_statusに更新しました。',
            ],
            'sms' => [
                'content' => ':nameによって稼働状況が更新されました。',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => '新しいスケジュールが作成されました',
                'content' => ':nameが:dateにスケジュールを設定しました。',
                'title'   => '新しいメンテナンス計画が作成されました。',
                'action'  => '詳しく見る',
            ],
            'slack' => [
                'title'   => '新しいスケジュールが作成されました',
                'content' => ':nameが:dateにスケジュールを設定しました。',
            ],
            'sms' => [
                'content' => ':nameが:dateにスケジュールを設定しました。',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => '購読処理を完了させてください',
                'content' => ':app_nameの更新情報を受け取るには、メールアドレスの認証を完了させてください。',
                'title'   => ':app_nameの更新情報を受け取るには、メールアドレスの認証を完了させてください。',
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
                'content' => ':app_nameのチームに招待されました。招待を完了するには、以下から登録して下さい。',
                'title'   => ':app_nameのチームに招待されました。招待を完了するには、以下から登録して下さい。',
                'action'  => '招待を受ける',
            ],
        ],
    ],
];
