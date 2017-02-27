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
        'last_updated' => '最后更新：:timestamp',
        'status'       => [
            0 => '未知状态',
            1 => '运行正常',
            2 => '性能问题',
            3 => '部分中断',
            4 => '重大故障',
        ],
        'group' => [
            'other' => '其它服务',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => '当前网站运行健康，没有故障信息。',
        'past'          => '历史状态',
        'previous_week' => '上一页',
        'next_week'     => '下一页',
        'stickied'      => '置顶故障',
        'scheduled'     => '维护计划',
        'scheduled_at'  => '，开始时间：:timestamp',
        'posted'        => '发布于：:timestamp',
        'status'        => [
            1 => '检查中',
            2 => '修复中',
            3 => '监视中',
            4 => '已解决',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => '即将开始',
            1 => '正在进行',
            2 => '已完成',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] 当前网站运行健康，没有故障信息！|[2,Inf] 所有服务运行健康，没有故障信息！',
        'bad'   => '[0,1] 一个服务出现了问题！|[2,Inf] 部分服务出现了问题！',
        'major' => '[0,1] 一个服务出现重大故障！|[2,Inf] 部分服务出现重大故障！',
    ],

    'api' => [
        'regenerate' => '重置',
        'revoke'     => '注销',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => '上个小时',
            'hourly'    => '最近 12 小时',
            'weekly'    => '周',
            'monthly'   => '月',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => '请输入订阅邮箱：',
        'unsubscribe' => '点击这里取消订阅：:link',
        'button'      => '邮件订阅',
        'manage'      => [
            'no_subscriptions' => '已订阅所有更新。',
            'my_subscriptions' => '已订阅下列更新：',
        ],
        'email' => [
            'subscribe'          => 'Subscribe to email updates.',
            'subscribed'         => '恭喜，你已订阅电子邮件通知！请检查您的电子邮件，确认您的订阅！',
            'verified'           => '您的电子邮件订阅已经通过验证，感谢您的订阅！',
            'manage'             => '管理订阅',
            'unsubscribe'        => '取消订阅',
            'unsubscribed'       => '您的电子邮件订阅已经取消。',
            'failure'            => '订阅失败！请稍后再试。',
            'already-subscribed' => '当前电子邮件（:email）已经在订阅列表中了。',
        ],
    ],

    'signup' => [
        'title'    => '注  册',
        'username' => '用户名',
        'email'    => '电子邮件',
        'password' => '密  码',
        'success'  => '注册成功！',
        'failure'  => '注册失败！',
    ],

    'system' => [
        'update' => '检测到有新版本 Cachet 可用，你可以 <a href="https://docs.cachethq.io/docs/updating-cachet">点击这里</a> 查看更新。',
    ],

    // Modal
    'modal' => [
        'close'     => '关闭',
        'subscribe' => [
            'title'  => '订阅组件状态更新',
            'body'   => '请输入您用于接收订阅该服务更新通知的电子邮件地址。如果您已经订阅，您应已收到关于这个服务的一系列电子邮件。',
            'button' => '邮件订阅',
        ],
    ],

    // Other
    'home'            => '主页',
    'description'     => '关注我们：:app',
    'powered_by'      => '由 <a href="https://cachethq.io" class="links">Cachet</a> 提供技术支持',
    'timezone'        => ':timezone',
    'about_this_site' => '关于我们',
    'rss-feed'        => 'RSS',
    'atom-feed'       => '网站地图',
    'feed'            => '系统状态',

];
