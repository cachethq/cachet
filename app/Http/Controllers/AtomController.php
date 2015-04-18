<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\Incident;
use Roumen\Feed\Facades\Feed;

class AtomController extends AbstractController
{
    /**
     * Generates an Atom feed of all incidents.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup|null $group
     *
     * @return \Illuminate\Http\Response
     */
    public function feedAction(ComponentGroup $group = null)
    {
        $feed = Feed::make();
        $feed->title = Setting::get('app_name');
        $feed->description = trans('cachet.feed');
        $feed->link = Setting::get('app_domain');

        $feed->setDateFormat('datetime');

        if ($group) {
            $group->components->map(function ($component) use ($feed) {
                $component->incidents()->orderBy('created_at', 'desc')->get()->map(function ($incident) use ($feed) {
                    $this->feedAddItem($feed, $incident);
                });
            });
        } else {
            Incident::orderBy('created_at', 'desc')->get()->map(function ($incident) use ($feed) {
                $this->feedAddItem($feed, $incident);
            });
        }

        return $feed->render('atom');
    }

    /**
     * Adds an item to the feed.
     *
     * @param Roumen\Feed\Facades\Feed         $feed
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return void
     */
    private function feedAddItem(&$feed, $incident)
    {
        $feed->add(
            $incident->name,
            Setting::get('app_name'),
            Setting::get('app_domain'),
            $incident->created_at->toAtomString(),
            $incident->message
        );
    }
}
