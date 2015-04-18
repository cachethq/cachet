<?php

return [

    // Setup form fields
    'setup' => [
        'email'            => '電郵地址',
        'username'         => '用戶名',
        'password'         => '密碼',
        'site_name'        => '網站名稱',
        'site_domain'      => '網站域名',
        'site_timezone'    => '選擇你的時區',
        'site_locale'      => '選擇你的語言',
        'enable_google2fa' => '啟用 Google 兩步驗證',
    ],

    // Login form fields
    'login' => [
        'email'         => '電郵地址',
        'password'      => '密碼',
        '2fauth'        => '驗證碼',
        'invalid'       => '錯誤的電郵地址或密碼',
        'invalid-token' => '錯誤的驗證碼',
    ],

    // Incidents form fields
    'incidents' => [
        'name'         => '名稱',
        'status'       => '狀態',
        'component'    => '組件',
        'message'      => '信息',
        'message-help' => '你可以使用 Markdown 。',
        'scheduled_at' => '排期在什麼時候進行維護？',

        'templates' => [
            'name'     => '名稱',
            'template' => '模板',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => '名稱',
        'status'      => '狀態',
        'group'       => '組別',
        'description' => '描述',
        'link'        => '連結',
        'tags'        => '標籤',
        'tags-help'   => '請以半角逗號分隔。',

        'groups' => [
            'name' => '名稱',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => '名稱',
        'suffix'           => '後綴',
        'description'      => '描述',
        'description-help' => '你可以使用 Markdown 。',
        'display-chart'    => '在狀態頁上顯示圖表？',
        'default-value'    => '默認值',
        'calc_type'        => '指標的計算方法',
        'type_sum'         => '總和',
        'type_avg'         => '平均',

        'points' => [
            'value' => '值',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'         => '網站名稱',
            'site-url'          => '網站 URL',
            'site-timezone'     => '網站時區',
            'site-locale'       => '網站語言',
            'date-format'       => '日期格式',
            'display-graphs'    => '在狀態頁上顯示圖片？',
            'about-this-page'   => '關於本站',
            'days-of-incidents' => '顯示多少天前的事件？',
            'banner'            => '圖片橫幅',
            'banner-help'       => '橫幅寬度建議少於 930px 。',
            'google-analytics'  => 'Google Analytics 代碼',
        ],
        'security' => [
            'allowed-domains'      => '容許訪問的域名',
            'allowed-domains-help' => '請以半角逗號分隔。以上域名將會自動允許訪問。',
        ],
        'stylesheet' => [
            'custom-css' => '自定義樣式表',
        ],
        'theme' => [
            'background-color' => '背景顏色',
            'text-color'       => '文字顏色',
        ],
    ],

    'user' => [
        'username'       => '用戶名',
        'email'          => '電郵地址',
        'password'       => '密碼',
        'api-token'      => 'API 密鑰',
        'api-token-help' => '重新生成 API 密鑰將會導致現存的應用程序無法訪問 Cachet 。',
        '2fa'            => [
            'help' => '啟用兩步認證會使得你的賬戶更加安全。您需要下載 <a href="https://support.google.com/accounts/answer/1066447?hl=zh-hant">Google Authenticator</a> 或類似的應用程序到您的設備上。啓用後，你需要提供由該應用程序生成的驗證碼方可登錄。',
        ],
    ],

    // Buttons
    'add'    => '增加',
    'save'   => '儲存',
    'update' => '更新',
    'create' => '新增',
    'edit'   => '修改',
    'delete' => '刪除',
    'submit' => '提交',
    'cancel' => '取消',
    'remove' => '刪除',

    // Other
    'optional' => '* 可選項目',
];
