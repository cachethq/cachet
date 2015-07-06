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

    // Subscriber
    'subscriber' => [
        'subscribe' => '订阅最新的更新。',
        'button'    => '订阅',
        'email'     => [
            'subscribe'    => '订阅电子邮件更新。',
            'subscribed'   => '你已经订阅电子邮件通知，请检查您的电子邮件，确认您的订阅。',
            'verified'     => '您的电子邮件订阅已确认。谢谢！',
            'unsubscribe'  => '取消电子邮件订阅。',
            'unsubscribed' => '您的电子邮件订阅已被取消。',
            'failure'      => '邮件订阅失败。',
            'verify'       => [
                'text'           => '请确认您的 :app_name 电子邮件订阅。\\n:link\\n此致，:app_name',
                'html-preheader' => '请确认您的 :app_name 状态更新邮件订阅。',
                'html'           => '<p>请确认您的 :app_name 电子邮件订阅。</p><p>:link</p><p>此致，:app_name</p>',
            ],
            'maintenance' => [
                'text'           => '新的维护计划已被安排在 :app_name 上。\\n此致，:app_name',
                'html-preheader' => '新的维护计划已被安排在 :app_name 上。',
                'html'           => '<p>新的维护计划已被安排在 :app_name 上。</p><p>此致，:app_name</p>',
            ],
            'incident' => [
                'text'           => ':app_name 有新事件报告。\\n此致，:app_name',
                'html-preheader' => ':app_name 有新事件报告。',
                'html'           => '<p>:app_name 有新事件报告。</p><p>此致，:app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => ':app 应用状态页面由 <a href="https://cachethq.io">Cachet</a>提供支持。',
    'about_this_site' => '关于此站点',
    'rss-feed'        => 'RSS 订阅',
    'atom-feed'       => 'Atom 订阅',
    'feed'            => '状态源',

];
