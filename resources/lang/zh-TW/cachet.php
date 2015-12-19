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
        'status' => [
            1 => '正常運轉',
            2 => '性能問題',
            3 => '部分停運',
            4 => '嚴重停轉',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => '沒有已報告的事件。',
        'past'          => '過去的事件',
        'previous_week' => '前壹周',
        'next_week'     => '後壹周',
        'none'          => '沒有已報告的事件。',
        'scheduled'     => '計劃維護',
        'scheduled_at'  => '，計劃於 :timestamp',
        'status'        => [
            0 => '計劃中', // TODO: Hopefully remove this.
            1 => '調查中',
            2 => '已確認',
            3 => '觀察中',
            4 => '已修復',
        ],
    ],

    // Service Status
    'service' => [
        'good' => '所有系統正常運轉。',
        'bad'  => '壹些系統出了問題。',
    ],

    'api' => [
        'regenerate' => '重新生成 API 密鑰',
        'revoke'     => '註銷 API 密鑰',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => '最近12小時',
            'weekly'  => '周',
            'monthly' => '月',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => '訂閱最新的更新。',
        'button'    => '訂閱',
        'email'     => [
            'subscribe'          => '訂閱電子郵件更新。',
            'subscribed'         => '您已經訂閱電子郵件通知，請檢查您的電子郵件，確認您的訂閱。',
            'verified'           => '您的電子郵件訂閱已確認。謝謝！',
            'unsubscribe'        => '取消電子郵件訂閱。',
            'unsubscribed'       => '您的電子郵件訂閱已被取消。',
            'failure'            => '郵件訂閱失敗。',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => '請確認您的 :app_name 電子郵件訂閱。\\n:link\\n此致，:app_name',
                'html-preheader' => '請確認您的 :app_name 狀態更新郵件訂閱。',
                'html'           => '<p>請確認您的 :app_name 電子郵件訂閱。</p><p><a href=":link">:link</a></p><p>此致，:app_name</p>',
            ],
            'maintenance' => [
                'text'           => '新的維護計劃已被安排在 :app_name 上。\\n此致，:app_name',
                'html-preheader' => '新的維護計劃已被安排在 :app_name 上。',
                'html'           => '<p>新的維護計劃已被安排在 :app_name 上。</p><p>此致，:app_name</p>',
            ],
            'incident' => [
                'text'           => ':app_name 有新事件報告。\\n此致，:app_name',
                'html-preheader' => ':app_name 有新事件報告。',
                'html'           => '<p>:app_name 有新事件報告。</p><p>此致，:app_name</p>',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "您已被邀請加入 :app_name 團隊的狀態頁, 請點擊以下鏈接進行註冊。\n:link\n謝謝, :app_name",
                'html-preheader' => '您已被邀請加入 :app_name.',
                'html'           => '<p>您已被邀請加入 :app_name 團隊的狀態頁, 請點擊以下鏈接進行註冊。</p><p><a href=":link">:link</a></p><p>謝謝, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => '註冊',
        'username' => '用戶名',
        'email'    => '郵箱',
        'password' => '密碼',
        'success'  => '您的賬號已註冊成功。',
        'failure'  => '註冊失敗。',
    ],

    // Other
    'powered_by'      => ':app 應用狀態頁面由 <a href="https://cachethq.io">Cachet</a>提供支持。',
    'about_this_site' => '關於此站點',
    'rss-feed'        => 'RSS 訂閱',
    'atom-feed'       => 'Atom 訂閱',
    'feed'            => '狀態源',

];
