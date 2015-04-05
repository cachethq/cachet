<?php

return [

    // Setup form fields
    'setup' => [
        'email'            => '电邮地址',
        'username'         => '用戶名',
        'password'         => '密码',
        'site_name'        => '网站名称',
        'site_domain'      => '网站域名',
        'site_timezone'    => '选择你的时區',
        'site_locale'      => '选择你的语言',
        'enable_google2fa' => '启用 Google 两步验证',
    ],

    // Login form fields
    'login' => [
        'email'         => '电邮地址',
        'password'      => '密码',
        '2fauth'        => '令牌',
        'invalid'       => '错误的电邮地址或密码',
        'invalid-token' => '错误的令牌',
    ],

    // Incidents form fields
    'incidents' => [
        'name'         => '名称',
        'status'       => '状态',
        'component'    => '组件',
        'message'      => '信息',
        'message-help' => '你可以使用 Markdown 。',
        'scheduled_at' => '排期在什么时候進行维护？',

        'templates' => [
            'name'     => '名称',
            'template' => '模板',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => '名称',
        'status'      => '状态',
        'group'       => '组別',
        'description' => '描述',
        'link'        => '连结',
        'tags'        => '标签',
        'tags-help'   => '请以半角逗号分隔。',

        'groups' => [
            'name' => '名称',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => '名称',
        'suffix'           => '後綴',
        'description'      => '描述',
        'description-help' => '你可以使用 Markdown 。',
        'display-chart'    => '在状态页上显示图表？',
        'default-value'    => '默认值',
        'calc_type'        => '指标的计算方法',
        'type_sum'         => '总和',
        'type_avg'         => '平均',

        'points' => [
            'value' => '值',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'         => '网站名称',
            'site-url'          => '网站 URL',
            'site-timezone'     => '网站时區',
            'site-locale'       => '网站语言',
            'date-format'       => '日期格式',
            'display-graphs'    => '在状态页上显示图片？',
            'about-this-page'   => '关于本站',
            'days-of-incidents' => '显示多少天前的事件？',
            'banner'            => '图片横幅',
            'banner-help'       => '横幅宽度建议少于 930px 。',
            'google-analytics'  => 'Google Analytics 代码',
        ],
        'security' => [
            'allowed-domains'      => '容许访问的域名',
            'allowed-domains-help' => '请以半角逗号分隔。以上域名将会自动允许访问。',
        ],
        'stylesheet' => [
            'custom-css' => '自定义样式表',
        ],
        'theme' => [
            'background-color' => '背景颜色',
            'text-color'       => '文字颜色',
        ],
    ],

    'user' => [
        'username'       => '用户名',
        'email'          => '电邮地址',
        'password'       => '密码',
        'api-token'      => 'API 密钥',
        'api-token-help' => '重新生成 API 密钥将会导致现存的应用程式无法访问 Cachet 。',
        '2fa'            => [
            'help' => '启用两步认证会使你的帐户更安全。您需要下载<a href="https://support.google.com/accounts/answer/1066447?hl=zh-hant">Google Authenticator</a> 或类似的应用程式到您的设备上。启用后，你需要提供由该应用程序生成的令牌方可登录。',
        ],
    ],

    // Buttons
    'add'    => '增加',
    'save'   => '储存',
    'update' => '更新',
    'create' => '新增',
    'edit'   => '修改',
    'delete' => '删除',
    'submit' => '提交',
    'cancel' => '取消',
    'remove' => '删除',

    // Other
    'optional' => '* 可选项目',
];
