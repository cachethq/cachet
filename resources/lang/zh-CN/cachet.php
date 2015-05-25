<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'status' => [
            1 => '正常运转',
            2 => '性能问题',
            3 => '部分停运',
            4 => '严重停转',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => '没有已报告的事件。',
        'past'          => '过去的事件',
        'previous_week' => '前一周',
        'next_week'     => '后一周',
        'none'          => '没有已报告的事件。',
        'scheduled'     => '计划维护',
        'scheduled_at'  => '，计划于 :timestamp',
        'status'        => [
            0 => '计划中的', // TODO: Hopefully remove this.
            1 => '调查中',
            2 => '已定位',
            3 => '观察中',
            4 => '已修复',
        ],
    ],

    // Service Status
    'service' => [
        'good' => '所有系统正常运转。',
        'bad'  => '一些系统出了问题。',
    ],

    'api' => [
        'regenerate' => '重新生成 API 密钥',
        'revoke'     => '吊销 API 密钥',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => '每小时的',
            'daily'   => '每日的',
            'monthly' => '每月的',
        ],
    ],

    // Other
    'powered_by'      => ':app 应用状态页面由 <a href="https://cachethq.io">Cachet</a>提供支持。',
    'about_this_site' => '关于此站点',
    'rss-feed'        => 'RSS 源',
    'atom-feed'       => 'Atom 源',
    'feed'            => '状态源',

];
