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

    /*
     * Set trusted proxy IP addresses.
     *
     * Both IPv4 and IPv6 addresses are
     * supported, along with CIDR notation.
     *
     * The "*" character is syntactic sugar
     * within TrustedProxy to trust any proxy
     * that connects directly to your server,
     * a requirement when you cannot know the address
     * of your proxy (e.g. if using ELB or similar).
     *
     */
    'proxies' => env('TRUSTED_PROXIES'), // [<ip addresses>,], '*'

    /*
     * To trust one or more specific proxies that connect
     * directly to your server, use an array of IP addresses:
     */
    // 'proxies' => ['192.168.1.1'],

    /*
     * Or, to trust all proxies that connect
     * directly to your server, use a "*"
     */
    // 'proxies' => '*',

    /*
     * Which headers to use to detect proxy related data (For, Host, Proto, Port)
     *
     * Options include:
     *
     * - Illuminate\Http\Request::HEADER_FORWARDED (use the FORWARDED header to establish trust)
     *
     * @link https://symfony.com/doc/current/deployment/proxies.html
     */
    'headers' => [
        \Illuminate\Http\Request::HEADER_FORWARDED => null, // ne pas utiliser ce header
        \Illuminate\Http\Request::HEADER_X_FORWARDED_FOR => 'X_FORWARDED_FOR',
        \Illuminate\Http\Request::HEADER_X_FORWARDED_HOST => 'X_FORWARDED_HOST',
        \Illuminate\Http\Request::HEADER_X_FORWARDED_PORT => 'X_FORWARDED_PORT',
        \Illuminate\Http\Request::HEADER_X_FORWARDED_PROTO => 'X_FORWARDED_PROTO',
    ],

];
