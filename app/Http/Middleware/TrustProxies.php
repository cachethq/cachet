<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

/**
 * This is the trust proxies middleware class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;

    /**
     * Create new trust proxies instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->proxies = empty(env('TRUSTED_PROXIES')) ? '*' : explode(',', trim(env('TRUSTED_PROXIES')));
    }
}
