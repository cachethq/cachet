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
            3 => 'Partial Outage',
            4 => 'Major Outage',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => '无故障报告',
        'past'          => '历史状态',
        'previous_week' => '前一周',
        'next_week'     => '后一周',
        'none'          => '无故障报告',
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
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Regenerate API Key',
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
        'button'    => 'Subscribe',
        'email'     => [
            'subscribe'          => 'Subscribe to email updates.',
            'subscribed'         => '您已经订阅电子邮件通知，请检查您的电子邮件，确认您的订阅。',
            'verified'           => 'Your email subscription has been confirmed. Thank you!',
            'unsubscribe'        => '取消电子邮件订阅。',
            'unsubscribed'       => 'Your email subscription has been cancelled.',
            'failure'            => 'Something went wrong with the subscription.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
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
                'subject'        => 'Component Status Update',
                'text'           => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html-preheader' => 'Component Update from :app_name',
                'html'           => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title'  => 'Subscribe to notifications for :component_name.',
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
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Close',
        'subscribe' => [
            'title'  => 'Subscribe to component updates?',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll receive emails for this component too.',
            'button' => 'Subscribe',
        ],
    ],

    // Other
    'powered_by'      => ':app 状态页托管服务由 <a href="https://cachethq.io">Cachet</a> 提供技术支持。',
    'about_this_site' => '关于我们',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
