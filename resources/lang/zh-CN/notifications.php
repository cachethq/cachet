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
    'component' => [
        'status_update' => [
            'mail' => [
                'subject'  => '组件状态已更新',
                'greeting' => '一个组件的状态已被更新！',
                'content'  => ':name 状态已由 :old_status 变为 :new_status。',
                'action'   => '查看',
            ],
            'slack' => [
                'title'   => '组件状态已更新',
                'content' => ':name 状态已由 :old_status 变为 :new_status。',
            ],
            'sms' => [
                'content' => ':name 状态已由 :old_status 变为 :new_status。',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => '有新故障报告',
                'greeting' => '在 :app_name 处有新故障报告。',
                'content'  => '故障 :name 已被报告',
                'action'   => '查看',
            ],
            'slack' => [
                'title'   => '故障 :name 已报告',
                'content' => '在 :app_name 处有新故障报告。',
            ],
            'sms' => [
                'content' => '在 :app_name 处有新故障报告。',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => '有故障更新',
                'content' => ':name 被更新',
                'title'   => ':name 被更新至 :new_status',
                'action'  => '查看',
            ],
            'slack' => [
                'title'   => ':name 已更新',
                'content' => ':name 被更新至 :new_status',
            ],
            'sms' => [
                'content' => '故障 :name 已被更新',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => '新的维护计划已创建',
                'content' => ':name 已计划于 :date 进行',
                'title'   => '新的计划维护已创建。',
                'action'  => '查看',
            ],
            'slack' => [
                'title'   => '新计划已创建！',
                'content' => ':name 已计划于 :date 进行',
            ],
            'sms' => [
                'content' => ':name 已计划于 :date 进行',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => '验证您的订阅',
                'content' => '点击验证您对 :app_name 状态页的订阅。',
                'title'   => '验证您对 :app_name 状态页的订阅。',
                'action'  => '验证',
            ],
        ],
        'manage' => [
            'mail' => [
                'subject' => '管理您的订阅',
                'content' => '点击管理您对 :app_name 状态页的订阅。',
                'title'   => '点击管理您对 :app_name 状态页的订阅。',
                'action'  => '管理订阅',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => '这是来自 Cachet 的消息！',
                'content' => '这是来自 Cachet 的测试通知邮件！',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => '这是您的邀请函...',
                'content' => '您已被邀请加入 :app_name 状态页。',
                'title'   => '您被邀请加入 :app_name 状态页。',
                'action'  => '接受',
            ],
        ],
    ],
];
