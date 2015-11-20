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
        'incidents'                => '故障',
        'logged'                   => '{0} 当前没有故障信息|您已经记录了一个故障|您已经报告了 <strong>:count</strong> 个故障',
        'incident-create-template' => '创建模板',
        'incident-templates'       => '故障模板',
        'add'                      => [
            'title'   => '添加故障',
            'success' => '故障已添加',
            'failure' => '故障添加失败。',
        ],
        'edit' => [
            'title'   => '编辑故障',
            'success' => '故障已更新。',
            'failure' => '故障编辑失败。',
        ],
        'delete' => [
            'success' => '该故障已被删除，它将从您的状态页上消失。',
            'failure' => '故障删除失败，请重试。',
        ],

        // Incident templates
        'templates' => [
            'title' => '故障模板',
            'add'   => [
                'title'   => '添加故障模板',
                'message' => '没有模板，马上添加一个吧',
                'success' => '模板已创建。',
                'failure' => '创建模板失败。',
            ],
            'edit' => [
                'title'   => '编辑模板',
                'success' => '模板已更新!',
                'failure' => '模板修改失败',
            ],
            'delete' => [
                'success' => '该模板已被成功删除。',
                'failure' => '模板删除失败，请重试。',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '维护计划',
        'scheduled_at' => '计划在 :timestamp',
        'logged'       => '{0} 当前没有维护计划|您已经添加了一个维护|您已经添加了 <strong>:count</strong> 个维护计划',
        'add'          => [
            'title'   => '添加维护计划',
            'success' => '维护计划已添加。',
            'failure' => '维护计划添加失败。',
        ],
        'edit' => [
            'title'   => '编辑维护计划',
            'success' => '维护计划已更新！',
            'failure' => '维护计划更新失败。',
        ],
        'delete' => [
            'success' => '该维护计划已被删除，它将从您的状态页上消失。',
            'failure' => '无法删除该维护计划。请再试一次。',
        ],
    ],

    // Components
    'components' => [
        'components'         => '组件',
        'component_statuses' => '组件状态',
        'listed_group'       => '根据 :name 分组',
        'add'                => [
            'title'   => '添加组件',
            'message' => '没有组件，马上添加一个吧',
            'success' => '组件已添加。',
            'failure' => '组件添加失败。',
        ],
        'edit' => [
            'title'   => '编辑组件',
            'success' => '组件已更新。',
            'failure' => '组件编辑失败。',
        ],
        'delete' => [
            'success' => '该组件已被删除.',
            'failure' => '组件删除失败，请重试.',
        ],

        // Component groups
        'groups' => [
            'groups'        => '组件分组|组件分组',
            'no_components' => '没有组件分组，马上添加一个吧',
            'add'           => [
                'title'   => '添加组件分组',
                'success' => '组件分组已添加。',
                'failure' => '分组添加失败。',
            ],
            'edit' => [
                'title'   => '编辑组件分组',
                'success' => '分组已更新。',
                'failure' => '分组更新失败。',
            ],
            'delete' => [
                'success' => '组件分组已被删除。',
                'failure' => '组件分组删除失败，请重试。',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => '图表',
        'add'     => [
            'title'   => '添加图表',
            'message' => '没有图表，马上添加一个吧',
            'success' => '图表已创建。',
            'failure' => '图表创建失败。',
        ],
        'edit' => [
            'title'   => '编辑图表',
            'success' => '图表已更新。',
            'failure' => '图表更新失败。',
        ],
        'delete' => [
            'success' => '该图表已被删除，它将从您的状态页上消失。',
            'failure' => '图表删除失败，请重试。',
        ],
    ],

    // Subscribers
    'subscribers' => [
        'subscribers'  => '通知',
        'description'  => '当有故障发生，订阅者将收到邮件通知.',
        'verified'     => '已认证',
        'not_verified' => '未认证',
        'add'          => [
            'title'   => '添加邮件订阅',
            'success' => '邮件订阅已添加成功。',
            'failure' => '邮件订阅添加失败。',
        ],
        'edit' => [
            'title'   => '更新订阅者',
            'success' => '订阅者信息已更新.',
            'failure' => '更新订阅者信息失败.',
        ],
    ],

    // Team
    'team' => [
        'team'        => '团队',
        'member'      => '成员',
        'profile'     => '更改资料',
        'description' => '团队成员可维护组件和故障信息。',
        'add'         => [
            'title'   => '添加团队成员',
            'success' => '团队成员已添加。',
            'failure' => '添加组件失败。',
        ],
        'edit' => [
            'title'   => '更新配置文件',
            'success' => '配置文件已更新。',
            'failure' => '资料更新失败。',
        ],
        'delete' => [
            'success' => '团队成员已删除.',
            'failure' => '删除团队成员失败.',
        ],
        'invite' => [
            'title'   => '邀请团队成员',
            'success' => '团队成员已邀请成功.',
            'failure' => '邀请团队成员失败.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => '设置',
        'app-setup' => [
            'app-setup'   => '网站设置',
            'images-only' => '只能上传图像。',
            'too-big'     => '您上传的文件太大了。上传的图像大小应小于:size',
        ],
        'analytics' => [
            'analytics' => '第三方统计',
        ],
        'localization' => [
            'localization' => '国际化',
        ],
        'security' => [
            'security'   => '安全设置',
            'two-factor' => '没有启用双因素身份验证的用户',
        ],
        'stylesheet' => [
            'stylesheet' => '自定义样式',
        ],
        'theme' => [
            'theme' => '主题设置',
        ],
        'edit' => [
            'success' => '设置已保存。',
            'failure' => '无法保存设置。',
        ],
    ],

    // Login
    'login' => [
        'login'      => '登录',
        'logged_in'  => '您已登录',
        'welcome'    => '欢迎回来！',
        'two-factor' => '请输入您的双重验证Token。',
    ],

    // Sidebar footer
    'help'        => '帮助',
    'status_page' => '状态页',
    'logout'      => '退出',

    // Notifications
    'notifications' => [
        'notifications' => '通知',
        'awesome'       => '太棒了！',
        'whoops'        => '抱歉，',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => '欢迎来到Cachet',
        'message' => '您的状态页面即将准备好了！您可能想要配置这些额外的设置',
        'close'   => '您可以直接进入控制台',
        'steps'   => [
            'component'  => '添加组件',
            'incident'   => '添加故障',
            'customize'  => '主题设置',
            'team'       => '添加用户',
            'api'        => '生成 API Token',
            'two-factor' => '双因子身份验证',
        ],
    ],

];
