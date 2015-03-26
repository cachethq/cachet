<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Thujohn\Rss\RssFacade;

class RssController extends Controller
{
    /**
     * Generates an RSS feed of all incidents.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup|null $group
     *
     * @return \Illuminate\Http\Response
     */
    public function feedAction(ComponentGroup $group = null)
    {
        $feed = RssFacade::feed('2.0', 'UTF-8');
        $feed->channel([
            'title'       => Setting::get('app_name'),
            'description' => trans('cachet.feed'),
            'link'        => Setting::get('app_domain'),
        ]);

        if ($group) {
            $group->components->map(function ($component) use ($feed) {
                $component->incidents->orderBy('created_at', 'desc')->map(function ($incident) use ($feed) {
                    $this->feedAddItem($feed, $incident);
                });
            });
        } else {
            Incident::orderBy('created_at', 'desc')->get()->map(function ($incident) use ($feed) {
                $this->feedAddItem($feed, $incident);
            });
        }

        return Response::make($feed, 200, ['Content-Type' => 'text/xml']);
    }

    /**
     * Adds an item to the feed.
     *
     * @param \Thujohn\Rss\Rss                 $feed
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return void
     */
    private function feedAddItem(& $feed, $incident)
    {
        $feed->item([
            'title'       => $incident->name,
            'description' => $incident->message,
            'status'      => $incident->humanStatus,
            'pubDate'     => $incident->created_at->toRssString(),
        ]);
    }
}
