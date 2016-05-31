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

use CachetHQ\Cachet\Integrations\Feed;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Subscriber;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Jenssegers\Date\Date;

class DashboardController extends Controller
{
    /**
     * Start date.
     *
     * @var \Jenssegers\Date\Date
     */
    protected $startDate;

    /**
     * The timezone the status page is running in.
     *
     * @var string
     */
    protected $timeZone;

    /**
     * The feed integration.
     *
     * @var \CachetHQ\Cachet\Integrations\Feed
     */
    protected $feed;

    /**
     * Creates a new dashboard controller instance.
     *
     * @param \CachetHQ\Cachet\Integrations\Feed $feed
     *
     * @return void
     */
    public function __construct(Feed $feed)
    {
        $this->feed = $feed;
        $this->startDate = new Date();
        $this->dateTimeZone = Config::get('cachet.timezone');
    }

    /**
     * Shows the dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function showDashboard()
    {
        $components = Component::orderBy('order')->get();
        $incidents = $this->getIncidents();
        $subscribers = $this->getSubscribers();
        $feed = $this->feed->entries();

        dd($feed);

        return View::make('dashboard.index')
            ->withPageTitle(trans('dashboard.dashboard'))
            ->withComponents($components)
            ->withIncidents($incidents)
            ->withSubscribers($subscribers)
            ->withFeed($feed);
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
        $allIncidents = Incident::notScheduled()->whereBetween('created_at', [
            $this->startDate->copy()->subDays(30)->format('Y-m-d').' 00:00:00',
            $this->startDate->format('Y-m-d').' 23:59:59',
        ])->orderBy('created_at', 'desc')->get()->groupBy(function (Incident $incident) {
            return (new Date($incident->created_at))
                ->setTimezone($this->dateTimeZone)->toDateString();
        });

        // Add in days that have no incidents
        foreach (range(0, 30) as $i) {
            $date = (new Date($this->startDate))->setTimezone($this->dateTimeZone)->subDays($i);

            if (!isset($allIncidents[$date->toDateString()])) {
                $allIncidents[$date->toDateString()] = [];
            }
        }

        // Sort the array so it takes into account the added days
        $allIncidents = $allIncidents->sortBy(function ($value, $key) {
            return strtotime($key);
        }, SORT_REGULAR, false);

        return $allIncidents;
    }

    /**
     * Fetches all of the subscribers over the last 30 days.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function getSubscribers()
    {
        $allSubscribers = Subscriber::whereBetween('created_at', [
            $this->startDate->copy()->subDays(30)->format('Y-m-d').' 00:00:00',
            $this->startDate->format('Y-m-d').' 23:59:59',
        ])->orderBy('created_at', 'desc')->get()->groupBy(function (Subscriber $incident) {
            return (new Date($incident->created_at))
                ->setTimezone($this->dateTimeZone)->toDateString();
        });

        // Add in days that have no incidents
        foreach (range(0, 30) as $i) {
            $date = (new Date($this->startDate))->setTimezone($this->dateTimeZone)->subDays($i);

            if (!isset($allSubscribers[$date->toDateString()])) {
                $allSubscribers[$date->toDateString()] = [];
            }
        }

        // Sort the array so it takes into account the added days
        $allSubscribers = $allSubscribers->sortBy(function ($value, $key) {
            return strtotime($key);
        }, SORT_REGULAR, false);

        return $allSubscribers;
    }
}
