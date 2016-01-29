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

    'dashboard' => '儀表板',

    // Incidents
    'incidents' => [
        'title'                    => '事件與排程',
        'incidents'                => '事件',
        'logged'                   => '{0} 做得好，沒有任何事件。|你記錄了一個事件。|你回報了 <strong>:count</strong> 個事件。',
        'incident-create-template' => '新增模板',
        'incident-templates'       => '事件模板',
        'add'                      => [
            'title'   => '添加事件',
            'success' => '事件新增成功。',
            'failure' => '新增事件時遇到一些問題。',
        ],
        'edit' => [
            'title'   => '編輯事件',
            'success' => '事件更新成功。',
            'failure' => '更新事件時遇到一些問題。',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted. Please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => '事件模板',
            'add'   => [
                'title'   => '添加事件模板',
                'message' => 'You should add an Incident Template.',
                'success' => '事件模板新增成功。',
                'failure' => '新增事件模板時遇到一些問題。',
            ],
            'edit' => [
                'title'   => '編輯模板',
                'success' => '事件模板更新成功！',
                'failure' => '更新事件模板時遇到一些問題。',
            ],
            'delete' => [
                'success' => 'The tmplate has been deleted.',
                'failure' => 'The template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '排程維護',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => '排程於 :timestamp',
        'add'          => [
            'title'   => '新增排程維護',
            'success' => '排程維護新增成功。',
            'failure' => '新增排程維護時遇到一些問題。',
        ],
        'edit' => [
            'title'   => '修改排程維護',
            'success' => '排程維護修改成功！',
            'failure' => '修改排程維護時遇到一些問題。',
        ],
        'delete' => [
            'success' => '成功删除了排程維護！該排程維護將不會出現在狀態頁上。',
            'failure' => '無法刪除該排程維護。請稍後再試。',
        ],
    ],

    // Components
    'components' => [
        'components'         => '組件',
        'component_statuses' => '組件狀態',
        'listed_group'       => '屬於:name組',
        'add'                => [
            'title'   => '添加組件',
            'message' => '你應該先新增一個組件。',
            'success' => '組件新增成功。',
            'failure' => '新增組件時遇到一些問題。',
        ],
        'edit' => [
            'title'   => '編輯組件',
            'success' => '組件修改成功。',
            'failure' => '修改組件時遇到一些問題。',
        ],
        'delete' => [
            'success' => 'Component deleted.',
            'failure' => 'The Component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => '組件組|組件組',
            'no_components' => '您應添加壹個組件分組。',
            'add'           => [
                'title'   => '添加組件分組',
                'success' => '組件組新增成功。',
                'failure' => '新增組件組時遇到一些問題。',
            ],
            'edit' => [
                'title'   => '編輯組件分組',
                'success' => '組件組修改成功。',
                'failure' => '修改組件組時遇到一些問題。',
            ],
            'delete' => [
                'success' => 'Component Group deleted.',
                'failure' => 'The Component Group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => '效能度量',
        'add'     => [
            'title'   => '添加圖表',
            'message' => 'You should add a Metric.',
            'success' => '指標新增成功。',
            'failure' => '新增指標時遇到一些問題。',
        ],
        'edit' => [
            'title'   => '編輯圖表',
            'success' => '指標修改成功。',
            'failure' => '修改指標時遇到一些問題。',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will not show on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
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
            'failure' => '新增組件時遇到一些問題。',
        ],
        'edit' => [
            'title'   => '更新訂閱者',
            'success' => '訂閱者信息已更新.',
            'failure' => '更新時遇到一些問題。',
        ],
    ],

    // Team
    'team' => [
        'team'        => '團隊',
        'member'      => '成員',
        'profile'     => '個人檔案',
        'description' => '團隊成員可以新增、修改、或更新組件和事件。',
        'add'         => [
            'title'   => '添加團隊成員',
            'success' => '成功新增團隊成員。',
            'failure' => '添加組件失敗。',
        ],
        'edit' => [
            'title'   => '更新配置文件',
            'success' => '成功修改個人檔案。',
            'failure' => '更新時遇到一些問題。',
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
        'settings'  => '設定',
        'app-setup' => [
            'app-setup'   => '應用程式設定',
            'images-only' => '你只能上載圖片。',
            'too-big'     => '檔案大小過大。請嘗試上載一張大小小於 :size 的圖片。',
        ],
        'analytics' => [
            'analytics' => '第三方統計',
        ],
        'localization' => [
            'localization' => '國際化',
        ],
        'security' => [
            'security'   => '安全',
            'two-factor' => '下列用戶未使用雙重認證',
        ],
        'stylesheet' => [
            'stylesheet' => '樣式表',
        ],
        'theme' => [
            'theme' => '主題',
        ],
        'edit' => [
            'success' => '設定已儲存。',
            'failure' => '設定儲存失敗。',
        ],
    ],

    // Login
    'login' => [
        'login'      => '登入',
        'logged_in'  => '你已經登錄。',
        'welcome'    => '歡迎回來！',
        'two-factor' => '請輸入驗證碼。',
    ],

    // Sidebar footer
    'help'        => '幫助',
    'status_page' => '狀態頁',
    'logout'      => '登出',

    // Notifications
    'notifications' => [
        'notifications' => '通知',
        'awesome'       => '太好了。',
        'whoops'        => '唉呀。',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your status page!',
        'message' => '你的狀態頁快準備好了！不過你也許先想調整一下以下設定。',
        'close'   => '直接前往儀表板',
        'steps'   => [
            'component'  => '新增組件',
            'incident'   => '新增事件',
            'customize'  => '定制化',
            'team'       => '新增用戶',
            'api'        => '生成 API 密鑰',
            'two-factor' => '雙因素身份驗證',
        ],
    ],

];
