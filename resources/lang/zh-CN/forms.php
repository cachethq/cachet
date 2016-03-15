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

    // Setup form fields
    'setup' => [
        'email'            => '电子邮箱',
        'username'         => '用户名',
        'password'         => 'Password',
        'site_name'        => '站点名称',
        'site_domain'      => '域名',
        'site_timezone'    => 'Select your timezone',
        'site_locale'      => 'Select your language',
        'enable_google2fa' => 'Enable Google Two Factor Authentication',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Session Driver',
    ],

    // Login form fields
    'login' => [
        'login'         => '用户名或者邮箱地址',
        'email'         => '电子邮箱',
        'password'      => '密码',
        '2fauth'        => 'Authentication Code',
        'invalid'       => '无效的用户名或密码',
        'invalid-token' => 'Invalid token',
        'cookies'       => 'You must enable cookies to login.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => '名称',
        'status'             => 'Status',
        'component'          => 'Component',
        'message'            => '描述',
        'message-help'       => 'You may also use Markdown.',
        'scheduled_at'       => 'When to schedule the maintenance for?',
        'incident_time'      => '这次故障是什么时候发生的？',
        'notify_subscribers' => '通知订阅者',
        'visibility'         => '故障的可见性',
        'public'             => 'Viewable by public',
        'logged_in_only'     => '仅登录用户可见',
        'templates'          => [
            'name'     => '事件名',
            'template' => 'Template',
            'twig'     => '故障模板可以使用 <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> 模板语言',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => '组件名',
        'status'      => '状态',
        'group'       => '组件分组',
        'description' => '组件描述',
        'link'        => 'Link',
        'tags'        => 'Tags',
        'tags-help'   => 'Comma separated.',
        'enabled'     => '启用',

        'groups' => [
            'name'      => '组名',
            'collapsed' => '默认折叠分组？',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => '图表名',
        'suffix'           => 'Suffix',
        'description'      => '描述信息',
        'description-help' => '您可以使用Markdown语言。',
        'display-chart'    => 'Display chart on status page?',
        'default-value'    => '默认值',
        'calc_type'        => '图表计算方法',
        'type_sum'         => 'Sum',
        'type_avg'         => 'Average',
        'places'           => '小数点位数',
        'default_view'     => '默认视图',

        'points' => [
            'value' => 'Value',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => '网站名称',
            'site-url'               => '网址',
            'display-graphs'         => 'Display graphs on status page?',
            'about-this-page'        => '关于本页',
            'days-of-incidents'      => '显示多少天的故障？',
            'banner'                 => 'Banner Image',
            'banner-help'            => "It's recommended that you upload files no bigger than 930px wide .",
            'subscribers'            => 'Allow people to signup to email notifications?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics 代码',
            'analytics_gosquared'    => 'GoSquared Analytics 代码',
            'analytics_piwik_url'    => '输入Piwik实例的URL(不含http(s)://)',
            'analytics_piwik_siteid' => 'Piwik 的站点 id',
        ],
        'localization' => [
            'site-timezone'          => '系统时区',
            'site-locale'            => '系统语言',
            'date-format'            => '日期格式',
            'incident-date-format'   => '故障的时间显示格式',
        ],
        'security' => [
            'allowed-domains'      => '允许的域',
            'allowed-domains-help' => 'Comma separated. The domain set above is automatically allowed by default.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => '页面背景色',
            'background-fills'        => '区块填充色(组件, 故障, 页尾)',
            'banner-background-color' => '横幅背景色',
            'banner-padding'          => '横幅Padding值',
            'fullwidth-banner'        => '启用全宽横幅？',
            'text-color'              => 'Text Color',
            'dashboard-login'         => '在页尾显示 管理后台 的入口？',
            'reds'                    => '红 (用于错误类提示)',
            'blues'                   => '蓝 (用于信息类提示)',
            'greens'                  => '绿 (用于成功类提示)',
            'yellows'                 => '黄 (用于警告类提示)',
            'oranges'                 => '橙 (用于通知类提示)',
            'metrics'                 => '图表填充色',
            'links'                   => '链接',
        ],
    ],

    'user' => [
        'username'       => 'Username',
        'email'          => '电子邮箱',
        'password'       => '密码',
        'api-token'      => 'API Token',
        'api-token-help' => '重新生成您的 API Token将阻止现有的应用程序访问Cachet。',
        'gravatar'       => '修改您的 Gravatar 头像。',
        'user_level'     => '用户等级',
        'levels'         => [
            'admin' => '管理员',
            'user'  => '普通用户',
        ],
        '2fa' => [
            'help' => '启用双因素身份验证会增加您的帐户安全。您将需要下载 <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> 或类似的应用到您的移动设备。当您登录时将会要求您提供由应用程序生成的一个短码。',
        ],
        'team' => [
            'description' => '请输入您要邀请的团队成员的邮件地址：',
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Add',
    'save'   => 'Save',
    'update' => 'Update',
    'create' => 'Create',
    'edit'   => 'Edit',
    'delete' => 'Delete',
    'submit' => 'Submit',
    'cancel' => 'Cancel',
    'remove' => 'Remove',
    'invite' => '邀请',
    'signup' => '注册',

    // Other
    'optional' => '* Optional',
];
