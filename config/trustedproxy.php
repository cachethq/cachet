<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
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
    | By default, we are trusting local IPs and CloudFlare only.
    |
    */

    'proxies' => [
        '103.21.244.0/22',
        '103.22.200.0/22',
        '103.31.4.0/22',
        '104.16.0.0/12',
        '108.162.192.0/18',
        '131.0.72.0/22',
        '141.101.64.0/18',
        '162.158.0.0/15',
        '172.64.0.0/13',
        '173.245.48.0/20',
        '188.114.96.0/20',
        '190.93.240.0/20',
        '197.234.240.0/22',
        '198.41.128.0/17',
        '199.27.128.0/21',
        '2400:cb00::/32',
        '2405:8100::/32',
        '2405:b500::/32',
        '2606:4700::/32',
        '2803:f800::/32',
        '2c0f:f248::/32',
        '2a06:98c0::/29',

        // Local IPs
        '10.0.0.0/8',
        '172.16.0.0/12',
        '192.168.0.0/16',
        'fc00::/7',
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
