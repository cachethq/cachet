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
        'last_updated' => 'Last updated :timestamp',
        'status'       => [
            1 => '正常',
            2 => '效能問題',
            3 => '部分停止運作',
            4 => '停止運作',
        ],
        'group' => [
            'other' => 'Other Components',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'No incidents reported',
        'past'          => '過去的事件',
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
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
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
            'last_hour' => 'Last Hour',
            'hourly'    => '最近12小時',
            'weekly'    => '週',
            'monthly'   => '月',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => '訂閱最新的狀態更新。',
        'button'    => '訂閱',
        'manage'    => [
            'no_subscriptions' => 'You\'re currently subscribed to all updates.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => '訂閱 電子郵件 系統狀態更新。',
            'subscribed'         => '您已經訂閱電子郵件通知，請檢查您的電子郵件，確認您的訂閱。',
            'verified'           => '您的電子郵件訂閱已確認。謝謝！',
            'manage'             => 'Manage your subscription',
            'unsubscribe'        => '取消電子郵件訂閱。',
            'unsubscribed'       => '您的電子郵件訂閱已取消。',
            'failure'            => '郵件訂閱失敗。',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'   => "Please confirm your email subscription to :app_name status updates.\n:link",
                'html'   => '<p>Please confirm your email subscription to :app_name status updates.</p>',
                'button' => 'Confirm Subscription',
            ],
            'maintenance' => [
                'subject' => '[Maintenance Scheduled] :name',
            ],
            'incident' => [
                'subject' => '[New Incident] :status: :name',
            ],
            'component' => [
                'subject'       => 'Component Status Update',
                'text'          => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html'          => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title' => 'Subscribe to notifications for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "您已被邀請加入 :app_name 團隊的狀態頁, 請點擊以下鏈接進行註冊。\n:link\n謝謝, :app_name",
                'html'           => '<p>您已被邀請加入 :app_name 團隊的狀態頁, 請點擊以下鏈接進行註冊。</p><p><a href=":link">:link</a></p><p>謝謝, :app_name</p>',
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
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Close',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => '訂閱',
        ],
    ],

    // Other
    'home'            => 'Home',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => '關於此站點',
    'rss-feed'        => 'RSS 訂閱',
    'atom-feed'       => 'Atom 訂閱',
    'feed'            => 'Status 訂閱',

];
