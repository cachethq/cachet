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
        'password'         => '密码',
        'site_name'        => '站点标题',
        'site_domain'      => '域名',
        'site_timezone'    => '选择时区',
        'site_locale'      => '选择您的语言',
        'enable_google2fa' => '启用谷歌两步身份验证',
        'cache_driver'     => '缓存驱动',
        'queue_driver'     => '队列存储方式',
        'session_driver'   => '会话数据存储驱动',
        'mail_driver'      => '邮件发送方式',
        'mail_host'        => '电子邮件服务器',
        'mail_address'     => '发件人',
        'mail_username'    => '邮箱用户名',
        'mail_password'    => '邮箱密码',
    ],

    // Login form fields
    'login' => [
        'login'         => '用户名或者邮箱地址',
        'email'         => '电子邮箱',
        'password'      => '密码',
        '2fauth'        => '两步验证代码',
        'invalid'       => '无效的用户名或密码',
        'invalid-token' => '无效的代码。',
        'cookies'       => '您必须启用 cookies 来进行登录。',
        'rate-limit'    => '已超出登陆次数限制。',
        'remember_me'   => '记住我',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => '名称',
        'status'             => '状态',
        'component'          => '组件',
        'message'            => '描述',
        'message-help'       => '您可以使用Markdown语言。',
        'occurred_at'        => '这次故障是什么时候发生的？',
        'notify_subscribers' => '通知订阅者',
        'visibility'         => '故障的可见性',
        'stick_status'       => '关注故障',
        'stickied'           => '已关注',
        'not_stickied'       => '未关注',
        'public'             => '公共可见',
        'logged_in_only'     => '仅登录用户可见',
        'templates'          => [
            'name'     => '名称',
            'template' => '模板',
            'twig'     => '故障模板可以使用 <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> 模板语言',
        ],
    ],

    'schedules' => [
        'name'         => '名称',
        'status'       => '状态',
        'message'      => '描述',
        'message-help' => '您可以使用Markdown语言。',
        'scheduled_at' => '这次维护将在何时进行？',
        'completed_at' => '这次维护将在何时结束？',
        'templates'    => [
            'name'     => '名称',
            'template' => '模板',
            'twig'     => '故障模板可以使用 <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> 模板语言',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => '名称',
        'status'      => '状态',
        'group'       => '组件分组',
        'description' => '组件描述',
        'link'        => '链接',
        'tags'        => '标签',
        'tags-help'   => '以逗号分隔。',
        'enabled'     => '启用',

        'groups' => [
            'name'                     => '名称',
            'collapsing'               => '展开/折叠选项',
            'visible'                  => '总是展开',
            'collapsed'                => '默认折叠',
            'collapsed_incident'       => '折叠分组，但当有故障时展开',
            'visibility'               => '可见性',
            'visibility_public'        => '对所有人可见',
            'visibility_authenticated' => '只对已登录用户可见',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => '名称',
        'description'        => '组件描述',
        'start_at'           => '计划开始时间',
        'timezone'           => '时区',
        'schedule_frequency' => '计划间隔 (秒)',
        'completion_latency' => '延误时长 (秒)',
        'group'              => '组件分组',
        'active'             => '活跃？',
        'groups'             => [
            'name' => '组名',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => '名称',
        'suffix'                   => '后缀',
        'description'              => '组件描述',
        'description-help'         => '您可以使用Markdown语言。',
        'display-chart'            => '是否在状态页上显示图表？',
        'default-value'            => '默认值',
        'calc_type'                => '图表计算方法',
        'type_sum'                 => '求和',
        'type_avg'                 => '求平均',
        'places'                   => '小数点位数',
        'default_view'             => '默认视图',
        'threshold'                => '每个度量点之间应当间隔多少分钟？',
        'visibility'               => '可见性',
        'visibility_authenticated' => '只对已登录用户可见',
        'visibility_public'        => '对所有人可见',
        'visibility_hidden'        => '总是隐藏',

        'points' => [
            'value' => '数值',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                    => '站点标题',
            'site-url'                     => '站点地址（URL）',
            'display-graphs'               => '在状态页上显示图表',
            'about-this-page'              => '关于本页',
            'days-of-incidents'            => '显示多少天的故障？',
            'time_before_refresh'          => 'Status page refresh rate (in seconds).',
            'banner'                       => '横幅图像',
            'banner-help'                  => '建议上传文件宽度不大于 930 像素。',
            'subscribers'                  => '允许用户订阅邮件通知',
            'skip_subscriber_verification' => '是否跳过用户邮件验证？(小心，这可能会被滥用)',
            'automatic_localization'       => '根据访客的系统语言自动本地化状态页面',
            'enable_external_dependencies' => '启用第三方服务 (Google Fonts, Tracker 等)',
            'show_timezone'                => '显示状态页所在的时区',
            'only_disrupted_days'          => '仅显示有故障的日期',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics 代码',
            'analytics_gosquared'    => 'GoSquared Analytics 代码',
            'analytics_piwik_url'    => '输入Piwik实例的URL(不含http(s)://)',
            'analytics_piwik_siteid' => 'Piwik 的站点 id',
        ],
        'localization' => [
            'site-timezone'        => '系统时区',
            'site-locale'          => '系统语言',
            'date-format'          => '日期格式',
            'incident-date-format' => '故障日期和时间格式',
        ],
        'security' => [
            'allowed-domains'      => '允许的 CORS 域',
            'allowed-domains-help' => '以逗号分隔。默认情况下，API跨域请求将自动允许以上已设置的域。',
        ],
        'stylesheet' => [
            'custom-css' => '自定义 CSS 样式表',
        ],
        'theme' => [
            'background-color'        => '网站背景',
            'background-fills'        => '区块填充色(组件, 故障, 页尾)',
            'banner-background-color' => '横幅背景',
            'banner-padding'          => '横幅图像边距',
            'fullwidth-banner'        => '启用全宽横幅？',
            'text-color'              => '文字颜色',
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
        'username'       => '用户名',
        'email'          => '电子邮箱',
        'password'       => '密码',
        'api-token'      => 'API 令牌',
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
            'email'       => '电子邮箱 #:id',
        ],
    ],

    'general' => [
        'timezone' => '选择时区',
    ],

    // Buttons
    'add'            => '增加',
    'save'           => '保存​​',
    'update'         => '更新',
    'create'         => '创建',
    'edit'           => '编辑',
    'delete'         => '删除',
    'submit'         => '提交',
    'cancel'         => '取消',
    'remove'         => '删除',
    'invite'         => '邀请',
    'signup'         => '注册',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* 可选',
];
