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

use CachetHQ\Cachet\Settings\Repository;
use Closure;
use Illuminate\Http\Request;

/**
 * This is the ready for use middleware class.
 *
 * @author Graham Campbell <james@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 */
class ReadyForUse
{
    /**
     * The settings repository instance.
     *
     * @var \CachetHQ\Cachet\Settings\Repository
     */
    protected $settings;

    /**
     * Creates a new setup already completed middleware instance.
     *
     * @param \CachetHQ\Cachet\Settings\Repository $settings
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
        if (!$this->settings->get('app_name')) {
            return cachet_redirect('setup');
        }

        return $next($request);
    }
}
