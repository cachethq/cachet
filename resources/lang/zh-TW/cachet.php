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
        'last_updated' => '最後更新',
        'status'       => [
            0 => 'Unknown',
            1 => '正常',
            2 => '效能問題',
            3 => '部分停止運作',
            4 => '停止運作',
        ],
        'group' => [
            'other' => '其他组件',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => '沒有任何報告',
        'past'          => '過去的事件',
        'previous_week' => '上一週',
        'next_week'     => '下一週',
        'stickied'      => 'Stickied Incidents',
        'scheduled'     => '排程維護',
        'scheduled_at'  => '，於:timestamp',
        'posted'        => 'Posted :timestamp',
        'status'        => [
            1 => '調查中',
            2 => '已辨明',
            3 => '警戒中',
            4 => '已修復',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Upcoming',
            1 => 'In Progress',
            2 => 'Complete',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] 系統運作正常|[2,Inf] 所有系統運作正常',
        'bad'   => '[0,1] 系統目前發生異常情形。|[2,Inf] 部分系統發生異常情形。',
        'major' => '[0,1] 一個系統出現重大故障|[2,Inf] 一些系統出現重大故障',
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
            'monthly'   => '月',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => '訂閱最新的狀態更新。',
        'unsubscribe' => 'Unsubscribe at :link',
        'button'      => '訂閱',
        'manage'      => [
            'no_subscriptions' => '您目前已安裝所有的更新。',
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
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => '關於此站點',
    'rss-feed'        => 'RSS 訂閱',
    'atom-feed'       => 'Atom 訂閱',
    'feed'            => 'Status 訂閱',

];
