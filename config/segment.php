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
    /*
     * Whether to enable Segment or not.
     */
    'enabled' => true,

    /*
     * The key which enables you to write to the Segment.com API.
     */
    'write_key' => '',

    /*
     * Other configurations. Currently unused.
     */
    'consumer'      => 'socket',
    'debug'         => false,
    'ssl'           => true,
    'error_handler' => null,
];
