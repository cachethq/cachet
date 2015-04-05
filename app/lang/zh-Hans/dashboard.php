<?php

return [

    'dashboard' => '仪表板',

    // Incidents
    'incidents' => [
        'title'                    => '事件与排程',
        'incidents'                => '事件',
        'logged'                   => '{0} 做得好，没有任何事件。|你记录了一个事件。|你回报了 <strong>:count</strong> 个事件。',
        'incident-create-template' => '新增模板',
        'incident-templates'       => '事件模板',
        'add'                      => [
            'title'   => '新增事件',
            'success' => '事件新增成功。',
            'failure' => '新增事件时遇到一些问题。',
        ],
        'edit' => [
            'title'   => '修改事件',
            'success' => '事件更新成功。',
            'failure' => '更新事件时遇到一些问题。',
        ],

        // Incident templates
        'templates' => [
            'title' => '事件模板',
            'add'   => [
                'title'   => '新增事件模板',
                'success' => '事件模板新增成功。',
                'failure' => '新增事件模板时遇到一些问题。',
            ],
            'edit' => [
                'title'   => '修改事件模板',
                'success' => '事件模板更新成功！',
                'failure' => '更新事件模板时遇到一些问题。',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '排程维护',
        'scheduled_at' => '排程于 :timestamp',
        'add'          => [
            'title'   => '新增排程维护',
            'success' => '排程维护新增成功。',
            'failure' => '新增排程维护时遇到一些问题。',
        ],
        'edit' => [
            'title'   => '修改排程维护',
            'success' => '排程维护修改成功！',
            'failure' => '修改排程维护时遇到一些问题。',
        ],
        'delete' => [
            'success' => '成功删除了排程维护！該排程维护將不會出現在状态页上。',
            'failure' => '无法刪除該排程维护。请稍后再试。',
        ],
    ],

    // Components
    'components' => [
        'components'         => '组件',
        'component_statuses' => '组件状态',
        'listed_group'       => '屬于:name组',
        'add'                => [
            'title'   => '新增组件',
            'message' => '你应该先新增一个组件。',
            'success' => '组件新增成功。',
            'failure' => '新增组件时遇到一些问题。',
        ],
        'edit' => [
            'title'   => '修改组件',
            'success' => '组件修改成功。',
            'failure' => '修改组件时遇到一些问题。',
        ],

        // Component groups
        'groups' => [
            'groups' => '组件组|组件组',
            'add'    => [
                'title'   => '新增组件组',
                'success' => '组件组新增成功。',
                'failure' => '新增组件组时遇到一些问题。',
            ],
            'edit' => [
                'title'   => '修改组件组',
                'success' => '组件组修改成功。',
                'failure' => '修改组件组时遇到一些问题。',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => '指标',
        'add'     => [
            'title'   => '新增指标',
            'success' => '指标新增成功。',
            'failure' => '新增指标时遇到一些问题。',
        ],
        'edit' => [
            'title'   => '修改指标',
            'success' => '指标修改成功。',
            'failure' => '修改指标时遇到一些问题。',
        ],
    ],

    // Team
    'team' => [
        'team'        => '团队',
        'member'      => '成员',
        'profile'     => '个人档案',
        'description' => '团队成员可以新增、修改、或更新组件和事件。',
        'add'         => [
            'title'   => '新增团队成员',
            'success' => '成功新增团队成员。',
            'failure' => '新增团队成员时遇到一些问题。',
        ],
        'edit'        => [
            'title'   => '修改个人档案',
            'success' => '成功修改个人档案。',
            'failure' => '更新时遇到一些问题。',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => '设置',
        'app-setup' => [
            'app-setup'   => '应用程序设置',
            'images-only' => '你只能上载图片。',
            'too-big'     => '档案大小过大。请尝试上载一张大小小于 :size 的图片。',
        ],
        'security' => [
            'security'   => '安全',
            'two-factor' => '下列用户没有使用双重认证',
        ],
        'stylesheet' => [
            'stylesheet' => '样式表',
        ],
        'theme' => [
            'theme' => '主题',
        ],
        'edit' => [
            'success' => '设置已储存。',
            'failure' => '设置储存失败。',
        ],
    ],

    // Login
    'login' => [
        'login'      => '登录',
        'logged_in'  => '你已经登录。',
        'welcome'    => '欢迎回来！',
        'two-factor' => '请输入令牌。',
    ],

    // Sidebar footer
    'help'        => '帮助',
    'status_page' => '状态页',
    'logout'      => '退出',

    // Notifications
    'notifications'     => [
        'notifications' => '通知',
        'awesome'       => '太好了。',
        'whoops'        => '哎呀。',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => '欢迎来到 Cachet',
        'message' => '你的状态页快准备好了！不过你也许想先调整一下下列设置。',
        'close'   => '直接前往仪表板',
        'steps'   => [
            'component'  => '新增组件',
            'incident'   => '新增事件',
            'customize'  => '定制化',
            'team'       => '新增用戶',
            'api'        => '生成 API 密钥',
            'two-factor' => '两步验证',
        ],
    ],

];
