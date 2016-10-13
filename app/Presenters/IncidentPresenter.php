<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Presenters;

use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Presenters\Traits\TimestampsTrait;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Facades\Config;
use McCool\LaravelAutoPresenter\BasePresenter;

class IncidentPresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

    /**
     * Inciden icon lookup.
     *
     * @var array
     */
    protected $icons = [
        0 => 'icon ion-android-calendar', // Scheduled
        1 => 'icon ion-flag oranges', // Investigating
        2 => 'icon ion-alert yellows', // Identified
        3 => 'icon ion-eye blues', // Watching
        4 => 'icon ion-checkmark greens', // Fixed
    ];

    /**
     * Renders the message from Markdown into HTML.
     *
     * @return string
     */
    public function formattedMessage()
    {
        return Markdown::convertToHtml($this->wrappedObject->message);
    }

    /**
     * Return the raw text of the message, even without Markdown.
     *
     * @return string
     */
    public function raw_message()
    {
        return strip_tags($this->formattedMessage());
    }

    /**
     * Present diff for humans date time.
     *
     * @return string
     */
    public function created_at_diff()
    {
        return app(DateFactory::class)->make($this->wrappedObject->created_at)->diffForHumans();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function created_at_formatted()
    {
        return ucfirst(app(DateFactory::class)->make($this->wrappedObject->created_at)->format(Config::get('setting.incident_date_format', 'l jS F Y H:i:s')));
    }

    /**
     * Formats the created_at time ready to be used by bootstrap-datetimepicker.
     *
     * @return string
     */
    public function created_at_datetimepicker()
    {
        return app(DateFactory::class)->make($this->wrappedObject->created_at)->format('d/m/Y H:i');
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function created_at_iso()
    {
        return app(DateFactory::class)->make($this->wrappedObject->created_at)->toISO8601String();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function scheduled_at()
    {
        return app(DateFactory::class)->make($this->wrappedObject->scheduled_at)->toDateTimeString();
    }

    /**
     * Present diff for humans date time.
     *
     * @return string
     */
    public function scheduled_at_diff()
    {
        return app(DateFactory::class)->make($this->wrappedObject->scheduled_at)->diffForHumans();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function scheduled_at_formatted()
    {
        return ucfirst(app(DateFactory::class)->make($this->wrappedObject->scheduled_at)->format(Config::get('setting.incident_date_format', 'l jS F Y H:i:s')));
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function scheduled_at_iso()
    {
        return app(DateFactory::class)->make($this->wrappedObject->scheduled_at)->toISO8601String();
    }

    /**
     * Formats the scheduled_at time ready to be used by bootstrap-datetimepicker.
     *
     * @return string
     */
    public function scheduled_at_datetimepicker()
    {
        return app(DateFactory::class)->make($this->wrappedObject->scheduled_at)->format('d/m/Y H:i');
    }

    /**
     * Returns a formatted timestamp for use within the timeline.
     *
     * @return string
     */
    public function timestamp_formatted()
    {
        if ($this->wrappedObject->is_scheduled) {
            return $this->scheduled_at_formatted;
        }

        return $this->created_at_formatted;
    }

    /**
     * Return the iso timestamp for use within the timeline.
     *
     * @return string
     */
    public function timestamp_iso()
    {
        if ($this->wrappedObject->is_scheduled) {
            return $this->scheduled_at_iso;
        }

        return $this->created_at_iso;
    }

    /**
     * Present the status with an icon.
     *
     * @return string
     */
    public function icon()
    {
        if (isset($this->icons[$this->wrappedObject->status])) {
            return $this->icons[$this->wrappedObject->status];
        }
    }

    /**
     * Returns a human readable version of the status.
     *
     * @return string
     */
    public function human_status()
    {
        return trans('cachet.incidents.status.'.$this->wrappedObject->status);
    }

    /**
     * Returns the latest update.
     *
     * @return int|null
     */
    public function latest_status()
    {
        if ($update = $this->latest()) {
            return $update->status;
        }

        return $this->wrappedObject->status;
    }

    /**
     * Returns the latest update.
     *
     * @return string|null
     */
    public function latest_human_status()
    {
        if ($update = $this->latest()) {
            return trans('cachet.incidents.status.'.$update->status);
        }

        return $this->human_status();
    }

    /**
     * Present the latest icon.
     *
     * @return string
     */
    public function latest_icon()
    {
        if ($update = $this->latest()) {
            if (isset($this->icons[$update->status])) {
                return $this->icons[$update->status];
            }
        }

        return $this->icon();
    }

    /**
     * Fetch the latest incident update.
     *
     * @return \CachetHQ\Cachet\Models\IncidentUpdate|void
     */
    public function latest()
    {
        if ($update = $this->wrappedObject->updates()->orderBy('created_at', 'desc')->first()) {
            return $update;
        }
    }

    /**
     * Get the incident permalink.
     *
     * @return string
     */
    public function permalink()
    {
        return cachet_route('incident', [$this->wrappedObject->id]);
    }

    /**
     * The duration since the last update (in seconds).
     *
     * @return int
     */
    public function duration()
    {
        if ($update = $this->latest()) {
            dd($update->created_at->diffInSeconds($this->wrappedObject->created_at));

            return $this->wrappedObject->created_at->diffInSeconds($update->created_at);
        }

        return 0;
    }

    /**
     * Convert the presenter instance to an array.
     *
     * @return string[]
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'human_status'        => $this->human_status(),
            'latest_update_id'    => $this->latest() ? $this->latest()->id : null,
            'latest_status'       => $this->latest_status(),
            'latest_human_status' => $this->latest_human_status(),
            'latest_icon'         => $this->latest_icon(),
            'permalink'           => $this->permalink(),
            'duration'            => $this->duration(),
            'scheduled_at'        => $this->scheduled_at(),
            'created_at'          => $this->created_at(),
            'updated_at'          => $this->updated_at(),
        ]);
    }
}
