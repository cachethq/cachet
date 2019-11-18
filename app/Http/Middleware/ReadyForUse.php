<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Middleware;

use App\Settings\Repository;
use Closure;
use Illuminate\Http\Request;

/**
 * This is the ready for use middleware class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 */
class ReadyForUse
{
    /**
     * The settings repository instance.
     *
     * @var \App\Settings\Repository
     */
    protected $settings;

    /**
     * Creates a new setup already completed middleware instance.
     *
     * @param \App\Settings\Repository $settings
     *
     * @return void
     */
    public function __construct(Repository $settings)
    {
        $this->settings = $settings;
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
        if (!$request->is('setup*') && !$this->settings->get('app_name')) {
            return cachet_redirect('setup');
        }

        return $next($request);
    }
}
