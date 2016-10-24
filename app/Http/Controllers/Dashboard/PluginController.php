<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Dashboard;

use CachetHQ\Cachet\Services\Plugins\Contracts\Container as PluginsContainer;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

/**
 * This is the plugin dashboard controller.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class PluginController extends Controller
{
    /**
     * Array of sub-menu items.
     *
     * @var array
     */
    protected $subMenu = [];

    /**
     * Creates a new component controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        View::share([
            'sub_menu'  => $this->subMenu,
            'sub_title' => trans_choice('dashboard.plugins.plugins', 2),
        ]);
    }

    /**
     * Shows the plugins view.
     *
     * @param \App\Services\Plugins\Contracts\Container $plugins
     *
     * @return \Illuminate\View\View
     */
    public function showPlugins(PluginsContainer $plugins)
    {
        $plugins = $plugins->enabled();

        return View::make('dashboard.plugins.index')
            ->withPageTitle(trans_choice('dashboard.plugins.plugins', 2).' - '.trans('dashboard.dashboard'))
            ->withPlugins($plugins)
            ->withSubMenu($this->subMenu);
    }
}
