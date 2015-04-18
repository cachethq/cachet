<?php

return [
    // Components
    'components' => [
        'status' => [
            1 => '正常运行',
            2 => '性能问题',
            3 => '部分停止运作',
            4 => '停止运作',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => '沒有任何事件。',
        'past'          => '以前的事件',
        'previous_week' => '上星期',
        'next_week'     => '下星期',
        'none'          => '沒有任何报告',
        'scheduled'     => '排程维护',
        'scheduled_at'  => '，於:timestamp',
        'status'        => [
            0 => '排程中的维护', // TODO: Hopefully remove this.
            1 => '调查中',
            2 => '已辨明',
            3 => '警戒中',
            4 => '已修复',
        ],
    ],

    // Service Status
    'service' => [
        'good' => '全部系统运作正常。',
        'bad'  => '部分系统出现异常。',
    ],

    'api' => [
        'regenerate' => '重新生成 API 密钥',
        'revoke'     => '撤销 API 密钥',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => '每小时',
            'daily'   => '每天',
            'monthly' => '每月',
        ],
    ],

    // Other
    'powered_by'      => ':app 状态页是由 <a href="https://cachethq.io">Cachet</a> 提供。',
    'about_this_site' => '关于本站',
    'rss-feed'        => 'RSS 订阅',
    'atom-feed'       => 'Atom 订阅',
    'feed'            => 'Status 订阅',

];
