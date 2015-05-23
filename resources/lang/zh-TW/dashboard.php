<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@cachethq.io>
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
            'title'   => '新增事件',
            'success' => '事件新增成功。',
            'failure' => '新增事件時遇到一些問題。',
        ],
        'edit' => [
            'title'   => '修改事件',
            'success' => '事件更新成功。',
            'failure' => '更新事件時遇到一些問題。',
        ],

        // Incident templates
        'templates' => [
            'title' => '事件模板',
            'add'   => [
                'title'   => '新增事件模板',
                'success' => '事件模板新增成功。',
                'failure' => '新增事件模板時遇到一些問題。',
            ],
            'edit' => [
                'title'   => '修改事件模板',
                'success' => '事件模板更新成功！',
                'failure' => '更新事件模板時遇到一些問題。',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '排程維護',
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
            'title'   => '新增組件',
            'message' => '你應該先新增一個組件。',
            'success' => '組件新增成功。',
            'failure' => '新增組件時遇到一些問題。',
        ],
        'edit' => [
            'title'   => '修改組件',
            'success' => '組件修改成功。',
            'failure' => '修改組件時遇到一些問題。',
        ],

        // Component groups
        'groups' => [
            'groups'        => '組件組|組件組',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => '新增組件組',
                'success' => '組件組新增成功。',
                'failure' => '新增組件組時遇到一些問題。',
            ],
            'edit' => [
                'title'   => '修改組件組',
                'success' => '組件組修改成功。',
                'failure' => '修改組件組時遇到一些問題。',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => '指標',
        'add'     => [
            'title'   => '新增指標',
            'success' => '指標新增成功。',
            'failure' => '新增指標時遇到一些問題。',
        ],
        'edit' => [
            'title'   => '修改指標',
            'success' => '指標修改成功。',
            'failure' => '修改指標時遇到一些問題。',
        ],
    ],

    // Team
    'team' => [
        'team'        => '團隊',
        'member'      => '成員',
        'profile'     => '個人檔案',
        'description' => '團隊成員可以新增、修改、或更新組件和事件。',
        'add'         => [
            'title'   => '新增團隊成員',
            'success' => '成功新增團隊成員。',
            'failure' => '新增團隊成員時遇到一些問題。',
        ],
        'edit'        => [
            'title'   => '修改個人檔案',
            'success' => '成功修改個人檔案。',
            'failure' => '更新時遇到一些問題。',
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
        'login'      => '登錄',
        'logged_in'  => '你已經登錄。',
        'welcome'    => '歡迎回來！',
        'two-factor' => '請輸入驗證碼。',
    ],

    // Sidebar footer
    'help'        => '幫助',
    'status_page' => '狀態頁',
    'logout'      => '登出',

    // Notifications
    'notifications'     => [
        'notifications' => '通知',
        'awesome'       => '太好了。',
        'whoops'        => '唉呀。',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => '歡迎來到 Cachet',
        'message' => '你的狀態頁快準備好了！不過你也許先想調整一下以下設定。',
        'close'   => '直接前往儀表板',
        'steps'   => [
            'component'  => '新增組件',
            'incident'   => '新增事件',
            'customize'  => '定制化',
            'team'       => '新增用戶',
            'api'        => '生成 API 密鑰',
            'two-factor' => '兩步驗證',
        ],
    ],

];
