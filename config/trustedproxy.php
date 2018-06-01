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

    'proxies' => empty(env('TRUSTED_PROXIES')) ? '*' : explode(',', trim(env('TRUSTED_PROXIES'))),

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
