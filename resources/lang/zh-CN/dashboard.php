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

    'dashboard' => '控制台',

    // Incidents
    'incidents' => [
        'title'                    => '故障和维护计划',
        'incidents'                => 'Incidents',
        'logged'                   => '{0} 当前没有故障信息|您已经记录了一个故障|您已经报告了 <strong>:count</strong> 个故障',
        'incident-create-template' => 'Create Template',
        'incident-templates'       => '故障模板',
        'add'                      => [
            'title'   => '添加故障',
            'success' => '故障已添加',
            'failure' => '添加故障时出错，请再试一次 ！',
        ],
        'edit' => [
            'title'   => '编辑故障',
            'success' => '故障已更新。',
            'failure' => '编辑故障时出错，请再试一次 ！',
        ],
        'delete' => [
            'success' => '故障已删除并将不会出现在状态页中',
            'failure' => '无法删除该故障，请再试一次。',
        ],

        // Incident templates
        'templates' => [
            'title' => '事件模板',
            'add'   => [
                'title'   => '添加故障模板',
                'message' => '你应该增加一个故障模板',
                'success' => '已创建新的故障模板。',
                'failure' => '创建模板失败。',
            ],
            'edit' => [
                'title'   => '编辑模板',
                'success' => '成功更新故障模板。',
                'failure' => '模板修改失败',
            ],
            'delete' => [
                'success' => '模板已删除。',
                'failure' => '无法删除该模板，请再试一次。',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '计划维护',
        'logged'       => '{0} 现在没有维护计划，好样的。|你已经记录下 1 个维护计划|你已经报告了 <strong>:count</strong> 个维护计划',
        'scheduled_at' => 'Scheduled at :timestamp',
        'add'          => [
            'title'   => '添加维护计划',
            'success' => '维护计划已添加。',
            'failure' => '添加维护计划时出错了，请再试一次。',
        ],
        'edit' => [
            'title'   => '编辑维护计划',
            'success' => '维护计划已更新！',
            'failure' => '添加编辑计划时出错了，请再试一次。',
        ],
        'delete' => [
            'success' => '该维护计划已被删除，它将从您的状态页上消失。',
            'failure' => '无法删除该维护计划。请再试一次。',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Components',
        'component_statuses' => 'Component Statuses',
        'listed_group'       => 'Grouped under :name',
        'add'                => [
            'title'   => '添加组件',
            'message' => '没有组件，马上添加一个吧',
            'success' => '组件已添加。',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'edit' => [
            'title'   => '编辑组件',
            'success' => '组件已更新。',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'delete' => [
            'success' => '组件已删除。',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => '组件分组|组件分组',
            'no_components' => '没有组件分组，马上添加一个吧',
            'add'           => [
                'title'   => '添加组件分组',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => '编辑组件分组',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => '组建分组已删除。',
                'failure' => 'The component group could not be deleted, please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrics',
        'add'     => [
            'title'   => '添加图表',
            'message' => '你应该添加一个图表。',
            'success' => '图表已创建。',
            'failure' => '添加图表时出错了，请再试一次。',
        ],
        'edit' => [
            'title'   => '编辑图表',
            'success' => '图表已更新。',
            'failure' => '添加图表时出错了，请再试一次。',
        ],
        'delete' => [
            'success' => '图表已删除并将不会出现在状态页中',
            'failure' => 'The metric could not be deleted, please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => '通知',
        'description'      => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'verified'         => '已认证',
        'not_verified'     => '未认证',
        'subscriber'       => ':email, subscribed :date',
        'no_subscriptions' => 'Subscribed to all updates',
        'add'              => [
            'title'   => '添加邮件订阅',
            'success' => '邮件订阅已添加成功。',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
        ],
        'edit' => [
            'title'   => '更新订阅者',
            'success' => '订阅者信息已更新.',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Member',
        'profile'     => 'Profile',
        'description' => '团队成员可维护组件和故障信息。',
        'add'         => [
            'title'   => '添加团队成员',
            'success' => '团队成员已添加。',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'edit' => [
            'title'   => '更新配置文件',
            'success' => '个人资料已更新',
            'failure' => 'Something went wrong updating the profile, please try again.',
        ],
        'delete' => [
            'success' => '团队成员已删除.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'invite' => [
            'title'   => '邀请团队成员',
            'success' => '团队成员已邀请成功.',
            'failure' => 'The invite could not be sent, please try again.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Settings',
        'app-setup' => [
            'app-setup'   => '网站设置',
            'images-only' => 'Only images may be uploaded.',
            'too-big'     => '您上传的文件太大了。上传的图像大小应小于:size',
        ],
        'analytics' => [
            'analytics' => '第三方统计',
        ],
        'localization' => [
            'localization' => '本地化',
        ],
        'customization' => [
            'customization' => '自定义',
            'header'        => '自定义页眉 HTML',
            'footer'        => '自定义页脚 HTML',
        ],
        'security' => [
            'security'   => '安全设置',
            'two-factor' => 'Users without two-factor authentication',
        ],
        'stylesheet' => [
            'stylesheet' => '自定义样式',
        ],
        'theme' => [
            'theme' => 'Theme',
        ],
        'edit' => [
            'success' => 'Settings saved.',
            'failure' => 'Settings could not be saved.',
        ],
    ],

    // Login
    'login' => [
        'login'      => '登录',
        'logged_in'  => '您已登录',
        'welcome'    => 'Welcome Back!',
        'two-factor' => 'Please enter your token.',
    ],

    // Sidebar footer
    'help'        => 'Help',
    'status_page' => '状态页',
    'logout'      => '退出',

    // Notifications
    'notifications' => [
        'notifications' => 'Notifications',
        'awesome'       => 'Awesome.',
        'whoops'        => '抱歉，',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => '欢迎来到你的状态页！',
        'message' => 'Your status page is almost ready! You might want to configure these extra settings',
        'close'   => '带我直接进入控制台',
        'steps'   => [
            'component'  => '添加组件',
            'incident'   => '添加故障',
            'customize'  => '主题设置',
            'team'       => 'Add users',
            'api'        => '生成 API Token',
            'two-factor' => '双因素身份验证',
        ],
    ],

];
