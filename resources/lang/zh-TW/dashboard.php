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

    'dashboard' => '儀表盤',

    // Incidents
    'incidents' => [
        'title'                    => '事件和維護計劃',
        'incidents'                => '事件',
        'logged'                   => '{0} 目前沒有問題 幹得漂亮！|您已經記錄了壹個事件|您已經報告了 <strong>:count</strong> 個事件',
        'incident-create-template' => '創建模板',
        'incident-templates'       => '事件模板',
        'add'                      => [
            'title'   => '添加事件',
            'success' => '事件已添加',
            'failure' => '事件添加失敗。',
        ],
        'edit' => [
            'title'   => '編輯事件',
            'success' => '事件已更新。',
            'failure' => '事件編輯失敗。',
        ],

        // Incident templates
        'templates' => [
            'title' => '事件模板',
            'add'   => [
                'title'   => '添加事件模板',
                'success' => '模板已創建。',
                'failure' => '創建模板失敗。',
            ],
            'edit' => [
                'title'   => '編輯模板',
                'success' => '模板已更新!',
                'failure' => '模板修改失敗',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '維護計劃',
        'scheduled_at' => '計劃在 :timestamp',
        'add'          => [
            'title'   => '添加維護計劃',
            'success' => '維護計劃已添加。',
            'failure' => '維護計劃添加失敗。',
        ],
        'edit' => [
            'title'   => '編輯維護計劃',
            'success' => '維護計劃已更新！',
            'failure' => '維護計劃更新失敗。',
        ],
        'delete' => [
            'success' => '維護計劃已被刪除，它將從您的狀態頁上消失。',
            'failure' => '無法刪除該維護計劃。請再試壹次。',
        ],
    ],

    // Components
    'components' => [
        'components'         => '組件',
        'component_statuses' => '組件狀態',
        'listed_group'       => '根據 :name 分組',
        'add'                => [
            'title'   => '添加組件',
            'message' => '您應該添加壹個組件。',
            'success' => '組件已添加。',
            'failure' => '組件添加失敗。',
        ],
        'edit' => [
            'title'   => '編輯組件',
            'success' => '組件已更新。',
            'failure' => '組件編輯失敗。',
        ],

        // Component groups
        'groups' => [
            'groups'        => '組件分組|組件分組',
            'no_components' => '您應添加壹個組件分組。',
            'add'           => [
                'title'   => '添加組件分組',
                'success' => '組件分組已添加。',
                'failure' => '分組添加失敗。',
            ],
            'edit' => [
                'title'   => '編輯組件分組',
                'success' => '分組已更新。',
                'failure' => '分組更新失敗。',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => '圖表',
        'add'     => [
            'title'   => '添加圖表',
            'success' => '圖表已創建。',
            'failure' => '圖表創建失敗。',
        ],
        'edit' => [
            'title'   => '編輯圖表',
            'success' => '圖表已更新。',
            'failure' => '圖表更新失敗。',
        ],
    ],

    // Subscribers
    'subscribers' => [
        'subscribers'  => '訂閱者',
        'description'  => '當有新的事件被創建時訂閱者將收到郵件通知.',
        'verified'     => '已認證',
        'not_verified' => '未認證',
        'add'          => [
            'title'   => '添加訂閱者',
            'success' => '訂閱者已添加成功.',
            'failure' => '訂閱者添加失敗.',
        ],
        'edit' => [
            'title'   => '更新訂閱者',
            'success' => '訂閱者信息已更新.',
            'failure' => '更新訂閱者信息失敗.',
        ],
    ],

    // Team
    'team' => [
        'team'        => '團隊',
        'member'      => '成員',
        'profile'     => '更改資料',
        'description' => '團隊成員將能夠添加、修改和編輯組件和事件。',
        'add'         => [
            'title'   => '添加團隊成員',
            'success' => '團隊成員已添加。',
            'failure' => '添加組件失敗。',
        ],
        'edit' => [
            'title'   => '更新配置文件',
            'success' => '配置文件已更新。',
            'failure' => '資料更新失敗。',
        ],
        'delete' => [
            'success' => '團隊成員已刪除.',
            'failure' => '刪除團隊成員失敗.',
        ],
        'invite' => [
            'title'   => '邀請團隊成員',
            'success' => '團隊成員已邀請成功.',
            'failure' => '邀請團隊成員失敗.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => '設置',
        'app-setup' => [
            'app-setup'   => '系統設置',
            'images-only' => '只能上傳圖像。',
            'too-big'     => '您上傳的文件太大了。上傳的圖像大小應小於:size',
        ],
        'analytics' => [
            'analytics' => '第三方統計',
        ],
        'localization' => [
            'localization' => '國際化',
        ],
        'security' => [
            'security'   => '安全設置',
            'two-factor' => '沒有啟用雙因素身份驗證的用戶',
        ],
        'stylesheet' => [
            'stylesheet' => '自定義樣式',
        ],
        'theme' => [
            'theme' => '主題設置',
        ],
        'edit' => [
            'success' => '設置已保存。',
            'failure' => '無法保存設置。',
        ],
    ],

    // Login
    'login' => [
        'login'      => '登錄',
        'logged_in'  => '您已登錄',
        'welcome'    => '歡迎回來！',
        'two-factor' => '請輸入您的雙重驗證Token。',
    ],

    // Sidebar footer
    'help'        => '幫助',
    'status_page' => '狀態頁面',
    'logout'      => '註銷',

    // Notifications
    'notifications' => [
        'notifications' => '通知',
        'awesome'       => '太棒了！',
        'whoops'        => '哎呦！',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => '歡迎來到Cachet',
        'message' => '您的狀態頁面即將準備好了！您可能想要配置這些額外的設置',
        'close'   => '您可以直接進入儀表盤',
        'steps'   => [
            'component'  => '創建組件',
            'incident'   => '創建事件',
            'customize'  => '自定義',
            'team'       => '添加用戶',
            'api'        => '生成 API 令牌。',
            'two-factor' => '雙因素身份驗證',
        ],
    ],

];
