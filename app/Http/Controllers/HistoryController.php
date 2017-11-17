<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Component;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

/**
 * This is the history controller.
 *
 * @author Nicolà Schnieper <nicola.schnieper@podgroup.com>
 */
class HistoryController extends Controller
{
    /**
     * Show the history page.
     *
     * @return \Illuminate\View\View
     */
    public function showHistory()
    {
        $page = 1;
        $canPageBackward = true;
        $monthsToShow = Config::get('setting.app_history_months', 0);
        $filteredComponent = null;

        // Pagination
        if (Binput::has('page')) {
            $page = max(Binput::get('page'), 1);
        }

        $incidentVisibility = Auth::check() ? 0 : 1;

        $query = Incident::notScheduled()->where('visible', '>=', $incidentVisibility)
        ->orderBy('scheduled_at', 'desc')->orderBy('created_at', 'desc');
        if (Binput::has('filter')) {
            $query = $query->where('component_id', Binput::get('filter'));
            $filteredComponent = Component::where('id', Binput::get('filter'))->first();
        }
        $allIncidents = $query->get()->groupBy(function (Incident $incident) { // group by day
            return app(DateFactory::class)->make($incident->is_scheduled ? $incident->scheduled_at : $incident->created_at)->toDateString();
        })
        ->sortByDesc(function ($value, $key) { // group by month
            return $key;
        })
        ->groupBy(function ($value, $key) { // group by month
            return app(DateFactory::class)->make($key)->format('F Y');
        }, true);

        // show last page if page would be empty, define if page backward is possible
        $monthCount = count($allIncidents);
        $minNecessaryMonth = ($page - 1) * $monthsToShow;
        if ($monthCount <= $minNecessaryMonth) {
            $page = intdiv($monthCount, $monthsToShow) + 1;
            $canPageBackward = false;
        } elseif ($monthCount <= $minNecessaryMonth + $monthsToShow) {
            $canPageBackward = false;
        }

        $allIncidents = $allIncidents->forPage($page, $monthsToShow);

        return View::make('history.history')
            ->withAllIncidents($allIncidents)
            ->withCanPageForward($page > 1)
            ->withCanPageBackward($canPageBackward)
            ->withPage($page)
            ->withComponentsInGroups(ComponentGroup::with('components')->get())
            ->withComponentsOutGroups(Component::where('group_id', 0)->get())
            ->withFilteredComponent($filteredComponent);
    }
}
