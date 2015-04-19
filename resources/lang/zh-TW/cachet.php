<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'status' => [
            1 => '正常運行',
            2 => '效能問題',
            3 => '部分停止運作',
            4 => '停止運作',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => '沒有任何事件。',
        'past'          => '以前的事件',
        'previous_week' => '上星期',
        'next_week'     => '下星期',
        'none'          => '沒有任何報告',
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
        'good' => '全部系統運作正常。',
        'bad'  => '部分系統出現異常。',
    ],

    'api' => [
        'regenerate' => '重新生成 API 密鑰',
        'revoke'     => '撤銷 API 密鑰',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => '每小時',
            'daily'   => '每天',
            'monthly' => '每月',
        ],
    ],

    // Other
    'powered_by'      => ':app 狀態頁是由 <a href="https://cachethq.io">Cachet</a> 提供。',
    'about_this_site' => '關於本站',
    'rss-feed'        => 'RSS 訂閱',
    'atom-feed'       => 'Atom 訂閱',
    'feed'            => 'Status 訂閱',

];
