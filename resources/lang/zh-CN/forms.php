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
        'email'            => '电子邮件',
        'username'         => '用户名',
        'password'         => '密  码',
        'site_name'        => '站点标题',
        'site_domain'      => '站点地址（URL）',
        'site_timezone'    => '时  区',
        'site_locale'      => '站点语言',
        'enable_google2fa' => '双重认证',
        'cache_driver'     => '临时缓存',
        'queue_driver'     => '队列缓存',
        'session_driver'   => '会话缓存',
        'mail_driver'      => '邮件服务',
        'mail_host'        => '发送邮件服务器',
        'mail_address'     => '电子邮件地址',
        'mail_username'    => '用户名',
        'mail_password'    => '密  码',
    ],

    // Login form fields
    'login' => [
        'login'         => '用户名或电子邮件地址',
        'email'         => '电子邮件',
        'password'      => '密  码',
        '2fauth'        => '验证码',
        'invalid'       => '无效的用户名或密码',
        'invalid-token' => '登陆超时！',
        'cookies'       => '你必须启用 cookies 登陆！',
        'rate-limit'    => '已超出登陆次数限制！',
        'remember_me'   => '记住我的登陆信息',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => '故障名称',
        'status'             => '当前状态',
        'component'          => '网站服务',
        'message'            => '描述信息',
        'message-help'       => '支持 Markdown 语法',
        'occurred_at'        => '宕机时间',
        'notify_subscribers' => '通知订阅者',
        'visibility'         => '公开显示',
        'stick_status'       => '是否置顶',
        'stickied'           => '是',
        'not_stickied'       => '否',
        'public'             => '所有人可见',
        'logged_in_only'     => '仅登陆用户可见',
        'templates'          => [
            'name'     => '模板名称',
            'template' => '内容格式',
            'twig'     => '支持 <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> 模板语言',
        ],
    ],

    'schedules' => [
        'name'         => '计划名称',
        'status'       => '维护状态',
        'message'      => '描述信息',
        'message-help' => '支持 Markdown 语法',
        'scheduled_at' => '开始时间',
        'completed_at' => '结束时间',
        'templates'          => [
            'name'     => '模板名称',
            'template' => '项目模板',
            'twig'     => '支持 <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> 模板语言',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => '服务名称',
        'status'      => '当前状态',
        'group'       => '所属类别',
        'description' => '描述信息',
        'link'        => '链接',
        'tags'        => '标签',
        'tags-help'   => '多个标签请使用 “,” 分割',
        'enabled'     => '启用服务',

        'groups' => [
            'name'               => '分组名称',
            'collapsing'         => '显示方式',
            'visible'            => '全部展开',
            'collapsed'          => '全部折叠',
            'collapsed_incident' => '默认折叠，但当有故障时展开',
            'visibility'               => '公开显示',
            'visibility_public'        => '所有人可见',
            'visibility_authenticated' => '仅登陆用户可见',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => '报表名称',
        'suffix'           => '下标单位',
        'description'      => '描述信息',
        'description-help' => '支持 Markdown 语法',
        'display-chart'    => '显示图表',
        'default-value'    => '默认值',
        'calc_type'        => '统计方式',
        'type_sum'         => '总数（Sum）',
        'type_avg'         => '平均值（Average）',
        'places'           => '小数位数',
        'default_view'     => '默认视图',
        'threshold'        => '度量阈值',
        'visibility'               => '显示方式',
        'visibility_authenticated' => '仅验证用户可见',
        'visibility_public'        => '所有人可见',
        'visibility_hidden'        => '总是隐藏',

        'points' => [
            'value' => 'Value',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => '站点名称',
            'site-url'               => '站点地址（URL）',
            'display-graphs'         => '显示运行数据图',
            'about-this-page'        => '页面描述',
            'days-of-incidents'      => '显示多少天的运行状态？',
            'banner'                 => '横幅图像',
            'banner-help'            => "建议您上传的文件不超过 930px 宽度。",
            'subscribers'            => '允许任何人订阅',
            'skip_subscriber_verification' => '跳过订阅者验证（部分邮件服务商会把验证邮件当作垃圾邮件屏蔽）',
            'automatic_localization' => '根据访客所在的国家或区域提供本地内容',
            'enable_external_dependencies' => '启用第三方依赖（如：Google Fonts、Trackers 等...）',
            'show_timezone'                => '显示服务器时区',
            'only_disrupted_days'          => '仅显示故障状态',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics',
            'analytics_gosquared'    => 'GoSquared Analytics',
            'analytics_piwik_url'    => 'Piwik 的实例 URL（不包含 http(s)://）',
            'analytics_piwik_siteid' => 'Piwik 的站点 ID',
        ],
        'localization' => [
            'site-timezone'        => '系统时区',
            'site-locale'          => '区域和语言',
            'date-format'          => '日期格式',
            'incident-date-format' => '故障事件的日期和时间格式',
        ],
        'security' => [
            'allowed-domains'      => '允许的域',
            'allowed-domains-help' => '多个域名可使用 “,” 分割。',
        ],
        'stylesheet' => [
            'custom-css' => '请输入自定义层叠样式表',
        ],
        'theme' => [
            'background-color'        => '网站背景',
            'background-fills'        => '活动区域（服务、故障等...）',
            'banner-background-color' => '背景颜色',
            'banner-padding'          => '图像边距',
            'fullwidth-banner'        => '全屏显示',
            'text-color'              => '文本颜色',
            'dashboard-login'         => '显示管理员功能',
            'reds'                    => '错误提示',
            'blues'                   => '消息提示',
            'greens'                  => '成功提示',
            'yellows'                 => '警告提醒',
            'oranges'                 => '系统通知',
            'metrics'                 => '图表数据',
            'links'                   => '网站链接',
        ],
    ],

    'user' => [
        'username'       => '用户名',
        'email'          => '电子邮件',
        'password'       => '密  码',
        'api-token'      => 'API Token',
        'api-token-help' => '重新生成您的 API 令牌将阻止现有的应用程序访问 Cachet。',
        'gravatar'       => '修改您的 Gravatar 头像。',
        'user_level'     => '角  色',
        'levels'         => [
            'admin' => '管理员',
            'user'  => '普通用户',
        ],
        '2fa' => [
            'help' => '启用双重身份验证会增加您的帐户安全。您将需要下载 <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> 或类似的应用到您的移动设备。当您登录时将会要求您提供由应用程序生成的一个验证码。',
        ],
        'team' => [
            'description' => '用户邮箱',
            'email'       => '用户邮箱 #:id',
        ],
    ],

    // Buttons
    'add'    => '完成',
    'save'   => '保存',
    'update' => '更新',
    'create' => '完成',
    'edit'   => '编辑',
    'delete' => '删除',
    'submit' => '提交',
    'cancel' => '取消',
    'remove' => '移除',
    'invite' => '邀请',
    'signup' => '注册',

    // Other
    'optional' => '* 可选',
];
