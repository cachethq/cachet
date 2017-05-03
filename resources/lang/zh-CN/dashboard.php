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

    'dashboard' => '站点概要',

    // Incidents
    'incidents' => [
        'title'                    => '故障和维护',
        'incidents'                => '运行故障',
        'logged'                   => '{0} 当前没有故障信息。|您已经记录了 1 条故障信息。|您已经提交了 <strong>:count</strong> 条故障信息。',
        'incident-create-template' => '新建模板',
        'incident-templates'       => '项目模板',
        'updates'                  => '{0} 暂无更新|1 次更新|:count 次更新',
        'add'                      => [
            'title'   => '新建故障',
            'success' => '新建成功！',
            'failure' => '新建失败，请稍后再试。',
        ],
        'edit' => [
            'title'   => '编辑故障',
            'success' => '更新成功！',
            'failure' => '更新失败，请稍后再试。',
        ],
        'delete' => [
            'success' => '删除成功！',
            'failure' => '删除失败，请稍后再试。',
        ],
        'update' => [
            'title'    => '更新故障',
            'subtitle' => '<strong>:incident</strong>',
        ],

        // Incident templates
        'templates' => [
            'title' => '项目模板',
            'add'   => [
                'title'   => '新建模板',
                'message' => '模板提供了一致的格式，提高内容可读性。',
                'success' => '新建成功！',
                'failure' => '新建失败，请稍后再试。',
            ],
            'edit' => [
                'title'   => '编辑模板',
                'success' => '更新成功！',
                'failure' => '更新失败，请稍后再试。',
            ],
            'delete' => [
                'success' => '删除成功！',
                'failure' => '删除失败，请稍后再试。',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '维护计划',
        'logged'       => '{0} 现在没有维护计划，好样的！|您已经记录了 1 项维护计划。|您已经提交了 <strong>:count</strong> 项维护计划。',
        'scheduled_at' => '开始时间：:timestamp',
        'add'          => [
            'title'   => '新建计划',
            'success' => '新建成功！',
            'failure' => '新建失败，请稍后再试。',
        ],
        'edit' => [
            'title'   => '编辑计划',
            'success' => '更新成功！',
            'failure' => '更新失败，请稍后再试。',
        ],
        'delete' => [
            'success' => '删除成功！',
            'failure' => '删除失败，请稍后再试。',
        ],
    ],

    // Components
    'components' => [
        'components'         => '网站服务',
        'component_statuses' => '当前状态',
        'listed_group'       => '所属类别：:name',
        'add'                => [
            'title'   => '新建服务',
            'message' => '服务状态可以准确地表达您的站点健康状况。',
            'success' => '新建成功！',
            'failure' => '新建失败，请稍后再试。',
        ],
        'edit' => [
            'title'   => '编辑服务',
            'success' => '更新成功！',
            'failure' => '更新失败，请稍后再试。',
        ],
        'delete' => [
            'success' => '删除成功！',
            'failure' => '删除失败，请稍后再试。',
        ],

        // Component groups
        'groups' => [
            'groups'        => '服务分组|服务分组',
            'no_components' => '在同一个面板显示多个服务的运行状态。',
            'add'           => [
                'title'   => '新建分组',
                'success' => '新建成功！',
                'failure' => '新建失败，请稍后再试。',
            ],
            'edit' => [
                'title'   => '编辑类别',
                'success' => '更新失败！',
                'failure' => '更新失败，请稍后再试。',
            ],
            'delete' => [
                'success' => '删除成功！',
                'failure' => '删除失败，请稍后再试。',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => '统计报表',
        'add'     => [
            'title'   => '新建报表',
            'message' => '显示一段时间之内的站点运行状态。',
            'success' => '新建成功！',
            'failure' => '新建失败，请稍后再试。',
        ],
        'edit' => [
            'title'   => '编辑报表',
            'success' => '更新成功！',
            'failure' => '更新失败，请稍后再试。',
        ],
        'delete' => [
            'success' => '删除成功！',
            'failure' => '删除失败，请稍后再试。',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => '消息订阅',
        'description'      => '有新增故障或服务更新时，订阅者将会收到邮件提醒。',
        'verified'         => '已认证',
        'not_verified'     => '未认证',
        'subscriber'       => ':email，于 :date 订阅',
        'no_subscriptions' => '已订阅全部更新',
        'add'              => [
            'title'   => '新建订阅',
            'success' => '新建成功！',
            'failure' => '新建失败，请稍后再试。',
            'help'    => '每行仅限输入一个电子邮件地址',
        ],
        'edit' => [
            'title'   => '更新订阅',
            'success' => '更新成功！',
            'failure' => '更新失败，请稍后再试。',
        ],
    ],

    // Team
    'team' => [
        'team'        => '账户管理',
        'member'      => '团队成员',
        'profile'     => '个人资料',
        'description' => '管理员账户可以维护服务和故障信息。',
        'add'         => [
            'title'   => '添加用户',
            'success' => '添加成功！',
            'failure' => '添加失败，请稍后再试。',
        ],
        'edit' => [
            'title'   => '更新配置文件',
            'success' => '更新成功！',
            'failure' => '更新失败，请稍后再试。',
        ],
        'delete' => [
            'success' => '删除成功！',
            'failure' => '删除失败，请稍后再试。',
        ],
        'invite' => [
            'title'   => '邀请成员',
            'success' => '邀请成功！',
            'failure' => '邀请失败，请稍后再试。',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => '系统设置',
        'app-setup' => [
            'app-setup'   => '常规选项',
            'images-only' => '仅支持上传图像格式的文件。',
            'too-big'     => '文件大小超出限制！上传的图像大小不能大于 :size。',
        ],
        'analytics' => [
            'analytics' => '站点统计',
        ],
        'log' => [
            'log' => '日志文件',
        ],
        'localization' => [
            'localization' => '时间和语言',
        ],
        'customization' => [
            'customization' => '页面模板',
            'header'        => '请输入网站页眉模板',
            'footer'        => '请输入网站页脚模板',
        ],
        'mail' => [
            'mail'  => '邮件配置',
            'test'  => '测试',
            'email' => [
                'subject' => '来自 Cachet 的通知',
                'body'    => '这是一封来自 Cachet 的测试邮件。',
            ],
        ],
        'security' => [
            'security'   => '访问安全',
            'two-factor' => '未经双重验证的账户',
        ],
        'stylesheet' => [
            'stylesheet' => '附加样式',
        ],
        'theme' => [
            'theme' => '主题外观',
        ],
        'edit' => [
            'success' => '保存成功！',
            'failure' => '保存失败！',
        ],
        'credits' => [
            'credits'       => '关于我们',
            'contributors'  => '社区成员',
            'license'       => 'Cachet 是由 <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a> 开发的一个开源项目，使用 BSD-3 授权。',
            'backers-title' => '合作伙伴',
            'backers'       => '如果您想为后续的开发提供支持，请查看我们在 <a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a> 平台的众筹项目。',
            'thank-you'     => '感谢您和这 :count 位社区成员的贡献！',
        ],
    ],

    // Login
    'login' => [
        'login'      => '登录',
        'logged_in'  => '您已登录。',
        'welcome'    => '欢迎回来！',
        'two-factor' => '请输入您的验证码。',
    ],

    // Sidebar footer
    'help'        => '帮助',
    'status_page' => '系统状态',
    'logout'      => '注销',

    // Notifications
    'notifications' => [
        'notifications' => '',
        'awesome'       => '',
        'whoops'        => '',
    ],

    // Widgets
    'widgets' => [
        'support'          => '支持我们',
        'support_subtitle' => '查看我们在 <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> 平台的众筹项目！',
        'news'             => '最新资讯',
        'news_subtitle'    => '检查更新',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => '欢迎使用！',
        'message' => '一切准备就绪！现在你可以进行下面的操作。',
        'close'   => '查看站点概要',
        'steps'   => [
            'component'  => '新建服务',
            'incident'   => '新建故障',
            'customize'  => '页面模板',
            'team'       => '新建用户',
            'api'        => '个人资料',
            'two-factor' => '身份验证',
        ],
    ],

];
