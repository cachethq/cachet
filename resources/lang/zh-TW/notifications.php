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
                'subject'  => '元件狀態已更新',
                'greeting' => '一個元件的狀態已被更新！',
                'content'  => ':name 狀態已從 :old_status 更改為 :new_status。',
                'action'   => '檢視',
            ],
            'slack' => [
                'title'   => '元件狀態已更新',
                'content' => ':name 狀態已從 :old_status 更改為 :new_status。',
            ],
            'sms' => [
                'content' => ':name 狀態已從 :old_status 更改為 :new_status。',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => '已報告新的事件',
                'greeting' => '在 :app_name 中有新的事件報告。',
                'content'  => '事件 :name 已報告',
                'action'   => '檢視',
            ],
            'slack' => [
                'title'   => '事件 :name 已報告',
                'content' => '在 :app_name 中有新的事件報告。',
            ],
            'sms' => [
                'content' => '在 :app_name 中有新的事件報告。',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => '事件更新成功',
                'content' => ':name 已更新',
                'title'   => ':name 已更新為 :new_status',
                'action'  => '檢視',
            ],
            'slack' => [
                'title'   => ':name 已更新',
                'content' => ':name 已更新為 :new_status',
            ],
            'sms' => [
                'content' => '事件 :name 已被更新',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => '創建了新的維護計畫',
                'content' => ':name 已預定於 :date 執行',
                'title'   => '創建了新的定時維護。',
                'action'  => '檢視',
            ],
            'slack' => [
                'title'   => '創建了新的維護計畫！',
                'content' => ':name 已預定於 :date 執行',
            ],
            'sms' => [
                'content' => ':name 已預定於 :date 執行',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => '驗證您的訂閱',
                'content' => '按一下以驗證您在狀態頁 :app_name 的訂閱。',
                'title'   => '驗證您在狀態頁 :app_name 的訂閱。',
                'action'  => '驗證',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => '這是來自 Cachet 的消息！',
                'content' => '這是來自 Cachet 的測試郵件！',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => '這是您的邀請函',
                'content' => '您已被邀請加入 :app_name 狀態頁。',
                'title'   => '您被邀請加入 :app_name 狀態頁。',
                'action'  => '接受',
            ],
        ],
    ],
];
