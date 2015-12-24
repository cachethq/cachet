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
            1 => '运行正常',
            2 => '负载较高',
            3 => '部分停运',
            4 => '严重停转',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => '无故障报告',
        'past'          => '历史状态',
        'previous_week' => '前一周',
        'next_week'     => '后一周',
        'none'          => '当日无故障',
        'scheduled'     => '计划维护',
        'scheduled_at'  => '，计划于 :timestamp',
        'status'        => [
            0 => '计划中', // TODO: Hopefully remove this.
            1 => '确认中',
            2 => '修复中',
            3 => '已更新',
            4 => '已解决',
        ],
    ],

    // Service Status
    'service' => [
        'good' => '所有系统运行正常',
        'bad'  => '部分系统运行异常',
    ],

    'api' => [
        'regenerate' => '重新生成 API 密钥',
        'revoke'     => '注销 API 密钥',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Last Hour',
            'hourly'    => '最近12小时',
            'weekly'    => '周',
            'monthly'   => '月',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => '订阅最新的更新。',
        'button'    => '订阅',
        'email'     => [
            'subscribe'          => '订阅电子邮件更新。',
            'subscribed'         => '您已经订阅电子邮件通知，请检查您的电子邮件，确认您的订阅。',
            'verified'           => '您的电子邮件订阅已确认。谢谢！',
            'unsubscribe'        => '取消电子邮件订阅。',
            'unsubscribed'       => '您的电子邮件订阅已被取消。',
            'failure'            => '邮件订阅失败。',
            'already-subscribed' => '邮箱 :email 已加入订阅，请勿重复订阅.',
            'verify'             => [
                'text'           => '请确认您的 :app_name 电子邮件订阅。\\n:link\\n此致，:app_name',
                'html-preheader' => '请确认您的 :app_name 状态更新邮件订阅。',
                'html'           => '<p>请确认您的 :app_name 电子邮件订阅。</p><p><a href=":link">:link</a></p><p>此致，:app_name</p>',
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

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "您已被邀请加入 :app_name 团队的状态页, 请点击以下链接进行注册。\n:link\n谢谢, :app_name",
                'html-preheader' => '您已被邀请加入 :app_name.',
                'html'           => '<p>您已被邀请加入 :app_name 团队的状态页, 请点击以下链接进行注册。</p><p><a href=":link">:link</a></p><p>谢谢, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => '注册',
        'username' => '用户名',
        'email'    => '邮箱',
        'password' => '密码',
        'success'  => '您的账号已注册成功。',
        'failure'  => '注册失败。',
    ],

    // Other
    'powered_by'      => ':app 状态页托管服务由 <a href="https://cachethq.io">Cachet</a> 提供技术支持。',
    'about_this_site' => '关于我们',
    'rss-feed'        => 'RSS 订阅',
    'atom-feed'       => 'Atom 订阅',
    'feed'            => '状态源',

];
