<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Admin;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use stdClass;

class DashboardController extends Controller
{
    /**
     * Shows the dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function showDashboard()
    {
        $components = Component::orderBy('order')->get();
        $incidents = $this->getIncidents();

        return View::make('dashboard.index')
            ->withComponents($components)
            ->withIncidents($incidents);
    }

    /**
     * Shows the notifications view.
     *
     * @return \Illuminate\View\View
     */
    public function showNotifications()
    {
        return View::make('dashboard.notifications.index')
            ->withPageTitle(trans('dashboard.notifications.notifications').' '.trans('dashboard.dashboard'));
    }

    /**
     * Fetches all of the incidents over the last 30 days.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function getIncidents()
    {
        $incidents = Incident::select(DB::raw('COUNT(id) AS counter'))->groupBy(DB::raw('DATE_FORMAT(created_at, "%d%m%y")'))->get();
        $range = (30 - $incidents->count()) - 1;

        $fake = new stdClass();
        $fake->counter = 0;

        foreach (range(1, $range) as $key) {
            $incidents->prepend($fake);
        }

        return $incidents;
    }
}
