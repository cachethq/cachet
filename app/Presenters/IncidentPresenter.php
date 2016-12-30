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
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Presenters\Traits\TimestampsTrait;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Contracts\Support\Arrayable;
use McCool\LaravelAutoPresenter\BasePresenter;

class IncidentPresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Dates\DateFactory
     */
    protected $dates;

    /**
     * Inciden icon lookup.
     *
     * @var array
     */
    protected $icons = [
        0 => 'icon ion-android-calendar', // Scheduled
        1 => 'icon ion-alert-circled', // Investigating
        2 => 'icon ion-bug', // Identified
        3 => 'icon ion-eye', // Watching
        4 => 'icon ion-checkmark-circled greens', // Fixed
    ];

    /**
     * Create a new presenter.
     *
     * @param \CachetHQ\Cachet\Dates\DateFactory $dates
     * @param \CachetHQ\Cachet\Models\Incident   $resource
     *
     * @return void
     */
    public function __construct(DateFactory $dates, Incident $resource)
    {
        $this->dates = $dates;

        parent::__construct($resource);
    }

    /**
     * Renders the message from Markdown into HTML.
     *
     * @return string
     */
    public function formatted_message()
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
        return strip_tags($this->formatted_message());
    }

    /**
     * Present formatted occurred_at date time.
     *
     * @return string
     */
    public function occurred_at()
    {
        return $this->dates->make($this->wrappedObject->occurred_at)->toDateTimeString();
    }

    /**
     * Present diff for humans date time.
     *
     * @return string
     */
    public function occurred_at_diff()
    {
        return $this->dates->make($this->wrappedObject->occurred_at)->diffForHumans();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function occurred_at_formatted()
    {
        return ucfirst($this->dates->make($this->wrappedObject->occurred_at)->format($this->incidentDateFormat()));
    }

    /**
     * Formats the occurred_at time ready to be used by bootstrap-datetimepicker.
     *
     * @return string
     */
    public function occurred_at_datetimepicker()
    {
        return $this->dates->make($this->wrappedObject->occurred_at)->format('Y-m-d H:i');
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function occurred_at_iso()
    {
        return $this->dates->make($this->wrappedObject->occurred_at)->toISO8601String();
    }

    /**
     * Present diff for humans date time.
     *
     * @return string
     */
    public function created_at_diff()
    {
        return $this->dates->make($this->wrappedObject->created_at)->diffForHumans();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function created_at_formatted()
    {
        return ucfirst($this->dates->make($this->wrappedObject->created_at)->format($this->incidentDateFormat()));
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function created_at_iso()
    {
        return $this->dates->make($this->wrappedObject->created_at)->toISO8601String();
    }

    /**
     * Returns a formatted timestamp for use within the timeline.
     *
     * @return string
     */
    public function timestamp_formatted()
    {
        return $this->wrappedObject->occurred_at->diffForHumans();
    }

    /**
     * Return the iso timestamp for use within the timeline.
     *
     * @return string
     */
    public function timestamp_iso()
    {
        return $this->occurred_at_iso;
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
            return $this->wrappedObject->created_at->diffInSeconds($update->occurred_at);
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
            'occurred_at'         => $this->occurred_at(),
            'created_at'          => $this->created_at(),
            'updated_at'          => $this->updated_at(),
        ]);
    }
}
