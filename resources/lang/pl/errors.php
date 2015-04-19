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
        'title'   => 'That page went missing!',
        'message' => 'Sorry, but the page you are looking for has not been found. Check the URL for errors and try again.',
        'link'    => 'Return to homepage',
    ],
    'unauthorized' => [
        'code'    => '401',
        'title'   => 'Unauthorized',
        'message' => 'Sorry, you need admin privileges to see this page.',
        'link'    => 'Return to homepage',
    ],
];
