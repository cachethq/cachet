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
        'last_updated' => '最后更新于 :timestamp',
        'status'       => [
            0 => '未知',
            1 => '运行正常',
            2 => '性能问题',
            3 => '部分中断',
            4 => '严重中断',
        ],
        'group' => [
            'other' => '其他组件',
        ],
        'select_all'   => '全选',
        'deselect_all' => '反选所有',
    ],

    // Incidents
    'incidents' => [
        'none'         => '无故障报告',
        'past'         => '历史状态',
        'stickied'     => '已关注的故障',
        'scheduled'    => '计划维护',
        'scheduled_at' => '，计划于 :timestamp',
        'posted'       => '在 :timestamp 由 :username 发布',
        'posted_at'    => '发布于 :timestamp',
        'status'       => [
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
        'good'  => '[0,1] 系统工作正常|[2,*] 所有系统工作正常',
        'bad'   => '[0,1] 系统出现了问题|[2,*] 一些系统出现了问题',
        'major' => '[0,1] 系统出现重大故障|[2,*] 一些系统出现重大故障',
    ],

    'api' => [
        'regenerate' => '重新生成 API 密钥',
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
        'subscribe'           => '关注状态更改和更新',
        'unsubscribe'         => '取消订阅',
        'button'              => '订阅',
        'manage_subscription' => '管理订阅',
        'manage'              => [
            'notifications'       => '通知',
            'notifications_for'   => '管理通知给',
            'no_subscriptions'    => '您当前已订阅所有更新。',
            'update_subscription' => '更新订阅',
            'my_subscriptions'    => '您当前已订阅下列更新',
            'manage_at_link'      => '在 :link 管理你的订阅',
        ],
        'email' => [
            'manage_subscription' => '我们已经给您发送了一封电子邮件，请点击链接来管理您的订阅',
            'subscribe'           => '订阅电子邮件更新。',
            'subscribed'          => '您已经订阅电子邮件通知，请检查您的电子邮件进行确认。',
            'updated-subscribe'   => '您已成功更新您的订阅。',
            'verified'            => '您的电子邮件订阅已确认。谢谢！',
            'manage'              => '管理您的订阅',
            'unsubscribe'         => '取消电子邮件订阅。',
            'unsubscribed'        => '您的电子邮件订阅已被取消。',
            'failure'             => '邮件订阅失败。',
            'already-subscribed'  => '无法订阅，因为这个邮箱地址 ( :email ) 已经在订阅列表中了。',
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
            'button' => '订阅',
        ],
    ],

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => '有关于发生在 :date 的 :name 事件的细节与更新',
            'schedule'  => '有关于计划维护时段 :name ，开始于 :startDate，的细节说明',
            'subscribe' => '订阅 :app 以接收故障更新和定期维护信息',
            'overview'  => '始终保持对 :app 服务状态的关注。',
        ],
    ],

    // Other
    'home'            => '主屏幕',
    'powered_by'      => '由 <a href="https://cachethq.io" class="links">Cachet</a> 驱动。',
    'timezone'        => '时间将以 :timezone 时区显示。',
    'about_this_site' => '关于我们',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => '状态源',

];
