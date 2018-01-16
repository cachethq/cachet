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
                'subject'  => 'コンポーネント状況を更新しました',
                'greeting' => 'コンポーネント状況を更新しました!',
                'content'  => ':nameの状況が:old_statusから:new_statusに変更しました。',
                'action'   => '見て',
            ],
            'slack' => [
                'title'   => 'コンポーネント状況を更新しました',
                'content' => ':nameの状況が:old_statusから:new_statusに変更しました。',
            ],
            'sms' => [
                'content' => ':nameの状況が:old_statusから:new_statusに変更しました。',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => '新しいインシデントが報告されました',
                'greeting' => '新しいインシデントが:app_nameで報告されました。',
                'content'  => 'インシデント :name が報告されました',
                'action'   => '見て',
            ],
            'slack' => [
                'title'   => 'インシデント :name が報告されました',
                'content' => '新しいインシデントが:app_nameで報告されました',
            ],
            'sms' => [
                'content' => '新しいインシデントが:app_nameで報告されました。',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'インシデントを更新しました',
                'content' => ':name は更新されました',
                'title'   => ':name は :new_status へ更新されました',
                'action'  => '見て',
            ],
            'slack' => [
                'title'   => ':name を更新しました',
                'content' => ':name は :new_status へ更新されました',
            ],
            'sms' => [
                'content' => 'インシデント :name は更新されました',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => '新しいスケジュールが作成されました',
                'content' => ':name は :date へスケジュールされました',
                'title'   => '新しい計画メンテナンスを作成しました',
                'action'  => '見て',
            ],
            'slack' => [
                'title'   => '新しいスケジュールが作成されました!',
                'content' => ':name は :date へスケジュールされました',
            ],
            'sms' => [
                'content' => ':name は :date へスケジュールされました',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'サブスクリプションを確認してください',
                'content' => ':app_nameの状況ページのサブスクリプションの確認の為にクリックしてください。',
                'title'   => ':app_nameの状況ページのサブスクリプションを確認してください。',
                'action'  => '確認',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Cachetからピング！',
                'content' => 'これはCachetから試しにお知らせです!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'あなたの招待は中に。。。',
                'content' => ':app_nameの状況ページに招待されました。',
                'title'   => ':app_nameの状況ページに招待されています。',
                'action'  => '同意',
            ],
        ],
    ],
];
