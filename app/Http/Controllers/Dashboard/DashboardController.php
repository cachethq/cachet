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

use CachetHQ\Cachet\Bus\Commands\User\WelcomeUserCommand;
use CachetHQ\Cachet\Integrations\Contracts\Feed;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Subscriber;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

/**
 * This is the dashboard controller class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DashboardController extends Controller
{
    /**
     * Start date.
     *
     * @var \Carbon\Carbon
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
     * The user session object.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $guard;

    /**
     * Creates a new dashboard controller instance.
     *
     * @param \CachetHQ\Cachet\Integrations\Feed $feed
     * @param \Illuminate\Contracts\Auth\Guard   $guard
     *
     * @return void
     */
    public function __construct(Feed $feed, Guard $guard)
    {
        $this->feed = $feed;
        $this->guard = $guard;
        $this->startDate = Carbon::now();
        $this->dateTimeZone = Config::get('cachet.timezone');
    }

    /**
     * Redirect /admin to /dashboard.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectAdmin()
    {
        return cachet_redirect('dashboard');
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

        $componentGroups = $this->getVisibleGroupedComponents();
        $ungroupedComponents = Component::ungrouped()->get();

        $welcomeUser = !Auth::user()->welcomed;
        if ($welcomeUser) {
            dispatch(new WelcomeUserCommand(Auth::user()));
        }

        $entries = null;
        if ($feed = $this->feed->latest()) {
            $entries = array_slice($feed->channel->item, 0, 5);
        }

        return View::make('dashboard.index')
            ->withPageTitle(trans('dashboard.dashboard'))
            ->withComponents($components)
            ->withIncidents($incidents)
            ->withSubscribers($subscribers)
            ->withEntries($entries)
            ->withComponentGroups($componentGroups)
            ->withUngroupedComponents($ungroupedComponents)
            ->withWelcomeUser($welcomeUser);
    }

    /**
     * Fetches all of the incidents over the last 30 days.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function getIncidents()
    {
        $allIncidents = Incident::whereBetween('occurred_at', [
            $this->startDate->copy()->subDays(30)->format('Y-m-d').' 00:00:00',
            $this->startDate->format('Y-m-d').' 23:59:59',
        ])->orderBy('occurred_at', 'desc')->get()->groupBy(function (Incident $incident) {
            return (new Carbon($incident->occurred_at))
                ->setTimezone($this->dateTimeZone)->toDateString();
        });

        // Add in days that have no incidents
        foreach (range(0, 30) as $i) {
            $date = (new Carbon($this->startDate))->setTimezone($this->dateTimeZone)->subDays($i);

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
            return (new Carbon($incident->created_at))
                ->setTimezone($this->dateTimeZone)->toDateString();
        });

        // Add in days that have no incidents
        foreach (range(0, 30) as $i) {
            $date = (new Carbon($this->startDate))->setTimezone($this->dateTimeZone)->subDays($i);

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

    /**
     * Get visible grouped components.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function getVisibleGroupedComponents()
    {
        $componentGroupsBuilder = ComponentGroup::query();
        if (!$this->guard->check()) {
            $componentGroupsBuilder = ComponentGroup::visible();
        }

        $usedComponentGroups = Component::grouped()->pluck('group_id');

        return $componentGroupsBuilder->used($usedComponentGroups)
            ->get();
    }
}
