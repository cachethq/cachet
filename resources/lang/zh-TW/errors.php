<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'not-found' => [
        'code'    => '404',
        'title'   => '找不到頁面',
        'message' => '抱歉，你所請求的頁面並不存在。請檢查你的 URL 是否正確並再試一次。',
        'link'    => '返回主頁',
    ],
    'unauthorized' => [
        'code'    => '401',
        'title'   => '未經授權',
        'message' => '抱歉，你需要管理員權限方可瀏覽本頁面。',
        'link'    => '返回主頁',
    ],
];
