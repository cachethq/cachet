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
        'last_updated' => '最後更新： :timestamp',
        'status'       => [
            1 => '正常',
            2 => '效能問題',
            3 => '部分停止運作',
            4 => '停止運作',
        ],
        'group' => [
            'other' => '其他元件',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => '沒有故障報告',
        'past'          => '過往事件',
        'previous_week' => '上一週',
        'next_week'     => '下一週',
        'scheduled'     => '排程維護',
        'scheduled_at'  => '，於:timestamp',
        'status'        => [
            0 => '排程中的維護', // TODO: Hopefully remove this.
            1 => '調查中',
            2 => '已辨明',
            3 => '警戒中',
            4 => '已修復',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] 系統運作正常|[2,Inf] 所有系統運作正常',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => '重新產生 API 金鑰',
        'revoke'     => '撤銷 API 密鑰',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => '一小時前',
            'hourly'    => '最近12小時',
            'weekly'    => '週',
            'monthly'   => '月份',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => '訂閱最新的狀態更新。',
        'button'    => '訂閱',
        'manage'    => [
            'no_subscriptions' => '您目前已訂閱所有的更新。',
            'my_subscriptions' => '您目前已安裝下列更新',
        ],
        'email' => [
            'subscribe'          => '訂閱 電子郵件 系統狀態更新。',
            'subscribed'         => '您已經訂閱電子郵件通知，請檢查您的電子郵件，確認您的訂閱。',
            'verified'           => '您的電子郵件訂閱已確認。謝謝！',
            'manage'             => '管理您的訂閱',
            'unsubscribe'        => '取消電子郵件訂閱。',
            'unsubscribed'       => '您的電子郵件訂閱已取消。',
            'failure'            => '郵件訂閱失敗。',
            'already-subscribed' => '無法訂閱，因为這個郵件地址 :email 已經在訂閱列表中了。',
            'verify'             => [
                'text'   => "請確認您的 :app_name 狀態更新郵件訂閱。\n:link",
                'html'   => '<p>請確認您的 :app_name 狀態更新郵件訂閱。</p>',
                'button' => '確認訂閱',
            ],
            'maintenance' => [
                'subject' => '[計畫維護] :name',
            ],
            'incident' => [
                'subject' => '[新事件] :status: :name',
            ],
            'component' => [
                'subject'       => '組件狀態更新',
                'text'          => '組件 :component_name 的狀態已經更新。:component_name 現在的狀態為 :component_human_status。\n謝謝, :app_name',
                'html'          => '<p>組件 :component_name 有狀態改變。:component_name 目前 :component_human_status。</p><p>謝謝, :app_name</p>',
                'tooltip-title' => '訂閱來自 component_name 的更新',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "您已被邀請加入 :app_name 團隊的狀態頁, 請點擊以下鏈接進行註冊。\n:link\n謝謝, :app_name",
                'html' => '<p>您已被邀請加入 :app_name 團隊的狀態頁, 請點擊以下鏈接進行註冊。</p><p><a href=":link">:link</a></p><p>謝謝, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => '註冊',
        'username' => '用戶名',
        'email'    => '電郵地址',
        'password' => '密碼',
        'success'  => '您的賬號已註冊成功。',
        'failure'  => '註冊失敗。',
    ],

    'system' => [
        'update' => '有新版的Cachet可用，您可以<a href="https://docs.cachethq.io/docs/updating-cachet">點這裡</a>獲取更新諮詢',
    ],

    // Modal
    'modal' => [
        'close'     => '關閉',
        'subscribe' => [
            'title'  => '訂閱組件狀態更新',
            'body'   => '請輸入您用於接收訂閱該組件更新通知的電子信箱。如果您已經訂閱，您應該已收到關於這個組件的相關的電子郵件。',
            'button' => '訂閱',
        ],
    ],

    // Other
    'home'            => '首頁',
    'description'     => '始終保持對 :app 服務狀態的關注。',
    'powered_by'      => '由 <a href="https://cachethq.io" class="links">Cachet</a> 提供。',
    'about_this_site' => '關於此站點',
    'rss-feed'        => 'RSS 訂閱',
    'atom-feed'       => 'Atom 訂閱',
    'feed'            => 'Status 訂閱',

];
