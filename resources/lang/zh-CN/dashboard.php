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

    'dashboard' => '仪表盘',

    // Incidents
    'incidents' => [
        'title'                    => '事件和维护计划',
        'incidents'                => '事件',
        'logged'                   => '{0} 目前没有问题 干得漂亮！|您已经记录了一个事件|您已经报告了 <strong>:count</strong> 个事件',
        'incident-create-template' => '创建模板',
        'incident-templates'       => '事件模板',
        'add'                      => [
            'title'   => '添加一个事件',
            'success' => '事件已添加',
            'failure' => '事件添加失败。',
        ],
        'edit' => [
            'title'   => '编辑一个事件',
            'success' => '事件已更新。',
            'failure' => '事件编辑失败。',
        ],

        // Incident templates
        'templates' => [
            'title' => '事件模板',
            'add'   => [
                'title'   => '创建一个事件模板。',
                'success' => '模板已创建。',
                'failure' => '创建模板失败。',
            ],
            'edit' => [
                'title'   => '编辑模板',
                'success' => '模板已更新!',
                'failure' => '模板修改失败',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '计划维护',
        'scheduled_at' => '计划在 :timestamp',
        'add'          => [
            'title'   => '添加维护计划',
            'success' => '计划已添加。',
            'failure' => '计划添加失败。',
        ],
        'edit' => [
            'title'   => '编辑维护计划',
            'success' => '计划已更新！',
            'failure' => '计划更新失败。',
        ],
        'delete' => [
            'success' => '维护计划已被删除，它将从你的状态页上消失。',
            'failure' => '无法删除该维护计划。请再试一次。',
        ],
    ],

    // Components
    'components' => [
        'components'         => '组件',
        'component_statuses' => '组件状态',
        'listed_group'       => '根据 :name 分组',
        'add'                => [
            'title'   => '添加一个组件',
            'message' => '你应该添加一个组件。',
            'success' => '组件已创建。',
            'failure' => '组件添加失败。',
        ],
        'edit' => [
            'title'   => '编辑一个组件',
            'success' => '组件已更新。',
            'failure' => '组件编辑失败。',
        ],

        // Component groups
        'groups' => [
            'groups'        => '部件分组|部件分组',
            'no_components' => '您应添加一个组件分组。',
            'add'           => [
                'title'   => '添加一个分组。',
                'success' => '部件分组已添加。',
                'failure' => '分组添加失败。',
            ],
            'edit' => [
                'title'   => '编辑组件分组',
                'success' => '分组已更新。',
                'failure' => '分组更新失败。',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => '图表',
        'add'     => [
            'title'   => '添加一个图表',
            'success' => '图表已创建。',
            'failure' => '图表创建失败。',
        ],
        'edit' => [
            'title'   => '编辑图表',
            'success' => '图表已更新。',
            'failure' => '图表更新失败。',
        ],
    ],

    // Team
    'team' => [
        'team'        => '团队',
        'member'      => '成员',
        'profile'     => '更改资料',
        'description' => '团队成员将能够添加、修改和编辑组件和事件。',
        'add'         => [
            'title'   => '添加一个新团队成员',
            'success' => '团队成员已添加。',
            'failure' => '添加组件失败。',
        ],
        'edit' => [
            'title'   => '更新配置文件',
            'success' => '配置文件已更新。',
            'failure' => '资料更新失败。',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => '设置',
        'app-setup' => [
            'app-setup'   => '应用安装',
            'images-only' => '只能上传图像。',
            'too-big'     => '你上传的文件太大了。上传的图像大小应小于:size',
        ],
        'analytics' => [
            'analytics' => 'Analytics'
        ],
        'localization' => [
            'localization' => 'Localization'
        ],
        'security' => [
            'security'   => '安全',
            'two-factor' => '没有启用双因素身份验证的用户',
        ],
        'stylesheet' => [
            'stylesheet' => '样式表',
        ],
        'theme' => [
            'theme' => '主题',
        ],
        'edit' => [
            'success' => '设置已保存。',
            'failure' => '无法保存设置。',
        ],
    ],

    // Login
    'login' => [
        'login'      => '登陆',
        'logged_in'  => '您已登陆',
        'welcome'    => '欢迎回来！',
        'two-factor' => '请输入您的双重验证Token。',
    ],

    // Sidebar footer
    'help'        => '帮助',
    'status_page' => '状态页面',
    'logout'      => '注销',

    // Notifications
    'notifications' => [
        'notifications' => '通知',
        'awesome'       => '太棒了！',
        'whoops'        => '哎呦！',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => '欢迎来到Cachet',
        'message' => '您的状态页面即将准备好了！您可能想要配置这些额外的设置',
        'close'   => '您可以直接进入仪表盘',
        'steps'   => [
            'component'  => '创建组件',
            'incident'   => '创建事件',
            'customize'  => '自定义',
            'team'       => '添加用户',
            'api'        => '生成 API 令牌。',
            'two-factor' => '双因素身份验证',
        ],
    ],

];
