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
            1 => '运行正常',
            2 => '负载较高',
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
        'previous_week' => '前一周',
        'next_week'     => '后一周',
        'scheduled'     => 'Scheduled Maintenance',
        'scheduled_at'  => ', scheduled :timestamp',
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
        'subscribe' => '订阅最新的更新。',
        'button'    => 'Subscribe',
        'manage'    => [
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
            'verify'             => [
                'text'           => "Please confirm your email subscription to :app_name status updates.\n:link\nThank you, :app_name",
                'html-preheader' => 'Please confirm your email subscription to :app_name status updates.',
                'html'           => '<p>请确认您的 :app_name 电子邮件订阅。</p><p><a href=":link">:link</a></p><p>此致，:app_name</p>',
            ],
            'maintenance' => [
                'text'           => "New maintenance has been scheduled on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New maintenance has been scheduled on :app_name.',
                'html'           => '<p>新的维护计划已被安排在 :app_name 上。</p><p>此致，:app_name</p>',
            ],
            'incident' => [
                'text'           => "New incident has been reported on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New incident has been reported on :app_name.',
                'html'           => '<p>New incident has been reported on :app_name.</p><p>Thank you, :app_name</p>',
            ],
            'component' => [
                'subject'        => '组件状态更新',
                'text'           => 'component :component_name 的状态已经更新。component现在的状态为: component_human_status。\n谢谢, :app_name',
                'html-preheader' => 'component 更新来自:app_name',
                'html'           => '<p>component :component_name 已经被变更。component正在component_human_status。</p><p>谢谢, :app_name</p>',
                'tooltip-title'  => '订阅来自 component_name 的更新',
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
        'username' => 'Username',
        'email'    => '电子邮箱',
        'password' => 'Password',
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
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => ':app 状态页托管服务由 <a href="https://cachethq.io">Cachet</a> 提供技术支持。',
    'about_this_site' => '关于我们',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
