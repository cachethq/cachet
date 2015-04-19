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
        'title'   => '这个页面失踪了！',
        'message' => '抱歉，但我们无法找到您要访问的的页面。请检查你的 URL，然后重试。',
        'link'    => '返回主页',
    ],
    'unauthorized' => [
        'code'    => '401',
        'title'   => '未授权',
        'message' => '很抱歉，您需要管理员权限才能看到此页面。',
        'link'    => '返回主页',
    ],
];
