<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
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
        'site_name'        => '站点名称',
        'site_domain'      => '站点域名',
        'site_timezone'    => '选择您的时区',
        'site_locale'      => '选择您的语言',
        'enable_google2fa' => '启用谷歌双因素身份验证',
    ],

    // Login form fields
    'login' => [
        'email'         => '电子邮箱',
        'password'      => '密码',
        '2fauth'        => '双因素验证代码',
        'invalid'       => '无效的电子邮件或密码。',
        'invalid-token' => '无效的令牌。',
        'cookies'       => 'You must enable cookies to login.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'         => '事件名',
        'status'       => '状态',
        'component'    => '组件',
        'message'      => '消息',
        'message-help' => '您可以使用Markdown语言。',
        'scheduled_at' => '什么时间安排维护？',

        'templates' => [
            'name'     => '事件名',
            'template' => '模板',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => '组件名',
        'status'      => '状态',
        'group'       => '部件分组',
        'description' => '描述',
        'link'        => '链接',
        'tags'        => '标签',
        'tags-help'   => '以逗号分隔。',

        'groups' => [
            'name' => '组名',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => '图表名',
        'suffix'           => '后缀',
        'description'      => '描述信息',
        'description-help' => '您可以使用Markdown语言。',
        'display-chart'    => '在状态页上显示图表?',
        'default-value'    => '默认值',
        'calc_type'        => '图表计算方法',
        'type_sum'         => '求和',
        'type_avg'         => '求平均数',

        'points' => [
            'value' => '数值',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => '站点名称',
            'site-url'               => '站点URL',
            'site-timezone'          => '站点时区',
            'site-locale'            => '站点语言',
            'date-format'            => '日期格式',
            'display-graphs'         => '是否在状态页上显示图表',
            'about-this-page'        => '关于这个页面',
            'days-of-incidents'      => '显示多少天的事件？',
            'banner'                 => '横幅图像',
            'banner-help'            => '建议上传文件宽度不大于930像素。',
            'analytics_google'       => 'Google Analytics code',
            'analytics_gosquared'    => 'GoSquared Analytics code',
            'analytics_piwik_url'    => 'URL of your Piwik instance (without http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'security' => [
            'allowed-domains'      => '允许的域',
            'allowed-domains-help' => '以逗号分隔。默认情况下，API跨域请求将自动允许以上已设置的域。',
        ],
        'stylesheet' => [
            'custom-css' => '自定义样式表',
        ],
        'theme' => [
            'background-color' => '背景色',
            'text-color'       => '文字颜色',
        ],
    ],

    'user' => [
        'username'       => '用户名',
        'email'          => '电子邮箱',
        'password'       => '密码',
        'api-token'      => 'API 令牌',
        'api-token-help' => '重新生成您的 API 令牌将阻止现有的应用程序访问Cachet。',
        '2fa'            => [
            'help' => '启用双因素身份验证会增加您的帐户安全。您将需要下载 <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> 或类似的应用到您的移动设备。当您登录时将会要求您提供由应用程序生成的一个短码。',
        ],
    ],

    // Buttons
    'add'    => '增加',
    'save'   => '保存​​',
    'update' => '更新',
    'create' => '创建',
    'edit'   => '编辑',
    'delete' => '删除',
    'submit' => '提交',
    'cancel' => '取消',
    'remove' => '移除',

    // Other
    'optional' => '* 可选',
];
