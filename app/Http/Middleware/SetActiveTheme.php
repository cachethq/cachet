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
use CachetHQ\Cocoon\ThemeManager;
use Closure;
use Illuminate\Http\Request;

/**
 * This is the set active theme middleware class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SetActiveTheme
{
    /**
     * The theme manager instance.
     *
     * @var \CachetHQ\Cachet\Theme\ThemeManager
     */
    protected $themeManager;

    /**
     * The settings repository instance.
     *
     * @var \CachetHQ\Cachet\Settings\Repository
     */
    protected $settings;

    /**
     * Create a new set active theme middleware instance.
     *
     * @param \CachetHQ\Cocoon\ThemeManager        $themeManager
     * @param \CachetHQ\Cachet\Settings\Repository $settings
     *
     * @return void
     */
    public function __construct(ThemeManager $themeManager, Repository $settings)
    {
        $this->themeManager = $themeManager;
        $this->settings = $settings;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param string|null              $type
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($activeTheme = $this->settings->get('theme', 'CachetHQ/Official-Theme')) {
            $this->themeManager->loadTheme($activeTheme);
        }

        return $next($request);
    }
}
