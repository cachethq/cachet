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
        'email'            => '電子郵箱',
        'username'         => '用戶名',
        'password'         => '密碼',
        'site_name'        => '站點名稱',
        'site_domain'      => '站點域名',
        'site_timezone'    => '選擇您的時區',
        'site_locale'      => '選擇您的語言',
        'enable_google2fa' => '啟用谷歌雙因素身份驗證',
        'cache_driver'     => '緩存驅動',
        'session_driver'   => '會話驅動',
    ],

    // Login form fields
    'login' => [
        'email'         => '電子郵箱',
        'password'      => '密碼',
        '2fauth'        => '雙因素驗證代碼',
        'invalid'       => '無效的電子郵件或密碼。',
        'invalid-token' => '無效的令牌。',
        'cookies'       => '您必須啟用 cookies 來進行登錄。',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => '事件名',
        'status'             => '狀態',
        'component'          => '組件',
        'message'            => '消息',
        'message-help'       => '您可以使用Markdown語言。',
        'scheduled_at'       => '什麽時間安排維護？',
        'incident_time'      => '這次事件是什麽時候發生的？',
        'notify_subscribers' => '通知訂閱者',
        'visibility'         => '事件的可見性',
        'public'             => '公共可見',
        'logged_in_only'     => '僅登錄用戶可見',
        'templates'          => [
            'name'     => '事件模板名',
            'template' => '模板',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => '組件名',
        'status'      => '狀態',
        'group'       => '組件分組',
        'description' => '描述',
        'link'        => '鏈接',
        'tags'        => '標簽',
        'tags-help'   => '以逗號分隔。',
        'enabled'     => '啟用',

        'groups' => [
            'name' => '組名',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => '圖表名',
        'suffix'           => '後綴',
        'description'      => '描述信息',
        'description-help' => '您可以使用Markdown語言。',
        'display-chart'    => '在狀態頁上顯示圖表?',
        'default-value'    => '默認值',
        'calc_type'        => '圖表計算方法',
        'type_sum'         => '求和',
        'type_avg'         => '求平均數',

        'points' => [
            'value' => '數值',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => '站點名稱',
            'site-url'               => '站點URL',
            'display-graphs'         => '是否在狀態頁上顯示圖表',
            'about-this-page'        => '關於這個頁面',
            'days-of-incidents'      => '顯示多少天的事件？',
            'banner'                 => '橫幅圖像',
            'banner-help'            => '建議上傳文件寬度不大於930像素。',
            'subscribers'            => '允許用戶訂閱郵件通知嗎?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics 代碼',
            'analytics_gosquared'    => 'GoSquared Analytics 代碼',
            'analytics_piwik_url'    => '輸入Piwik實例的URL(不含http(s)://)',
            'analytics_piwik_siteid' => 'Piwik 的站點 id',
        ],
        'localization' => [
            'site-timezone'          => '站點時區',
            'site-locale'            => '站點語言',
            'date-format'            => '日期格式',
            'incident-date-format'   => '事件的時間戳格式',
        ],
        'security' => [
            'allowed-domains'      => '允許的域',
            'allowed-domains-help' => '以逗號分隔。默認情況下，API跨域請求將自動允許以上已設置的域。',
        ],
        'stylesheet' => [
            'custom-css' => '自定義樣式表',
        ],
        'theme' => [
            'background-color'        => '背景色',
            'text-color'              => '文字顏色',
            'dashboard-login'         => 'Show dashboard button in the footer?',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
        ],
    ],

    'user' => [
        'username'       => '用戶名',
        'email'          => '電子郵箱',
        'password'       => '密碼',
        'api-token'      => 'API 令牌',
        'api-token-help' => '重新生成您的 API 令牌將阻止現有的應用程序訪問Cachet。',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        '2fa'            => [
            'help' => '啟用雙因素身份驗證會增加您的帳戶安全。您將需要下載 <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> 或類似的應用到您的移動設備。當您登錄時將會要求您提供由應用程序生成的壹個短碼。',
        ],
        'team' => [
            'description' => '請輸入您要邀請的團隊成員的郵件地址：',
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => '增加',
    'save'   => '保存​​',
    'update' => '更新',
    'create' => '創建',
    'edit'   => '編輯',
    'delete' => '刪除',
    'submit' => '提交',
    'cancel' => '取消',
    'remove' => '移除',

    // Other
    'optional' => '* 可選',
];
