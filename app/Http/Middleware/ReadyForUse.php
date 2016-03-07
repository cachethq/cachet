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

use Closure;
use Exception;
use Illuminate\Config\Repository;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ReadyForUse
{
    /**
     * The config repository instance.
     *
     * @var Illuminate\Config\Repository
     */
    protected $config;

    /**
     * The redirector instance.
     *
     * @var \Illuminate\Routing\Redirector
     */
    protected $redirector;

    /**
     * Create a new ready for use middleware instance.
     *
     * @param Illuminate\Config\Repository   $config
     * @param \Illuminate\Routing\Redirector $redirector
     *
     * @return void
     */
    public function __construct(Repository $config, Redirector $redirector)
    {
        $this->config = $config;
        $this->redirector = $redirector;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            if (!$this->config->get('setting.app_name')) {
                return $this->redirector->to('setup');
            }
        } catch (Exception $e) {
            return $this->redirector->to('setup');
        }

        return $next($request);
    }
}
