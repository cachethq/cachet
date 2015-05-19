<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Http\Request;

return [

    /*
    |--------------------------------------------------------------------------
    | Trusted Proxies
    |--------------------------------------------------------------------------
    |
    | Set trusted proxy IP addresses. Both IPv4 and IPv6 addresses are
    | supported, along with CIDR notation. The "*" character is syntactic sugar
    | within TrustedProxy to trust any proxy; a requirement when you cannot
    | know the address of your proxy (e.g. if using Rackspace balancers).
    |
    | By default, we are trusting CloudFlare only.
    |
    */

    'proxies' => [
        '204.93.240.0',
        '204.93.177.0',
        '199.27.128.0',
        '173.245.48.0',
        '103.21.244.0',
        '103.22.200.0',
        '103.31.4.0',
        '141.101.64.0',
        '108.162.192.0',
        '190.93.240.0',
        '188.114.96.0',
        '197.234.240.0',
        '198.41.128.0',
        '162.158.0.0',
        '2400:cb00::',
        '2606:4700::',
        '2803:f800::',
        '2405:b500::',
        '2405:8100::',
    ],

    /*
    |--------------------------------------------------------------------------
    | Respected Headers
    |--------------------------------------------------------------------------
    |
    | Change these if the proxy does not send the default header names. Note
    | that headers such as X-Forwarded-For are transformed to
    | HTTP_X_FORWARDED_FOR format.
    |
    | By default, we are using the Symfony defaults.
    |
    */

    'headers' => [
        Request::HEADER_CLIENT_IP    => 'X_FORWARDED_FOR',
        Request::HEADER_CLIENT_HOST  => 'X_FORWARDED_HOST',
        Request::HEADER_CLIENT_PROTO => 'X_FORWARDED_PROTO',
        Request::HEADER_CLIENT_PORT  => 'X_FORWARDED_PORT',
    ],

];
