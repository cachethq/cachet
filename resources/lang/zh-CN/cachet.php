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
        'last_updated' => '最后更新 :timestamp',
        'status'       => [
            0 => '未知',
            1 => '运行正常',
            2 => '性能问题',
            3 => 'Partial Outage',
            4 => 'Major Outage',
        ],
        'group' => [
            'other' => '其他组件',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => '无故障报告',
        'past'          => '历史状态',
        'previous_week' => '上一周',
        'next_week'     => '下一周',
        'stickied'      => '已关注的故障',
        'scheduled'     => 'Scheduled Maintenance',
        'scheduled_at'  => ', scheduled :timestamp',
        'posted'        => '发布于 :timestamp',
        'status'        => [
            1 => '确认中',
            2 => '修复中',
            3 => '已更新',
            4 => '已解决',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => '即将进行',
            1 => '正在进行',
            2 => '已完成',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] 系统工作正常|[2,Inf] 所有系统工作正常',
        'bad'   => '[0,1] 一个系统出现了问题|[2,Inf] 一些系统出现了问题',
        'major' => '[0,1] 一个系统出现重大故障|[2,Inf] 一些系统出现重大故障',
    ],

    'api' => [
        'regenerate' => 'Regenerate API Key',
        'revoke'     => '注销 API 密钥',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => '上个小时',
            'hourly'    => '最近12小时',
            'weekly'    => '周',
            'monthly'   => '月',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => '订阅最新的更新。',
        'unsubscribe' => 'Unsubscribe at :link',
        'button'      => 'Subscribe',
        'manage'      => [
            'no_subscriptions' => '您当前已订阅所有更新。',
            'my_subscriptions' => '您当前已订阅下列更新',
        ],
        'email' => [
            'subscribe'          => 'Subscribe to email updates.',
            'subscribed'         => '您已经订阅电子邮件通知，请检查您的电子邮件，确认您的订阅。',
            'verified'           => 'Your email subscription has been confirmed. Thank you!',
            'manage'             => '管理您的订阅',
            'unsubscribe'        => '取消电子邮件订阅。',
            'unsubscribed'       => 'Your email subscription has been cancelled.',
            'failure'            => 'Something went wrong with the subscription.',
            'already-subscribed' => '无法订阅，因为这个邮箱地址 ( :email ) 已经在订阅列表中了。',
        ],
    ],

    'signup' => [
        'title'    => '注册',
        'username' => '用户名',
        'email'    => '电子邮箱',
        'password' => '密码',
        'success'  => '您的账号已注册成功。',
        'failure'  => '注册失败。',
    ],

    'system' => [
        'update' => '有新版的Cachet可用，您可以<a href="https://docs.cachethq.io/docs/updating-cachet">点击这里</a>获取更新咨询',
    ],

    // Modal
    'modal' => [
        'close'     => '关闭',
        'subscribe' => [
            'title'  => '订阅组件状态更新',
            'body'   => '请输入您用于接收订阅该组件更新通知的电子邮箱。如果您已经订阅，您应已收到关于这个组件的一系列电子邮件。',
            'button' => 'Subscribe',
        ],
    ],

    // Other
    'home'            => '主屏幕',
    'description'     => '始终保持对 :app 服务状态的关注。',
    'powered_by'      => '由 <a href="https://cachethq.io" class="links">Cachet</a> 驱动。',
    'timezone'        => '时间将以 :timezone 时区显示。',
    'about_this_site' => '关于我们',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];