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

class SchedulePresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

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
     * Present formatted date time.
     *
     * @return string
     */
    public function completed_at()
    {
        return app(DateFactory::class)->make($this->wrappedObject->completed_at)->toDateTimeString();
    }

    /**
     * Present diff for humans date time.
     *
     * @return string
     */
    public function completed_at_diff()
    {
        return app(DateFactory::class)->make($this->wrappedObject->completed_at)->diffForHumans();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function completed_at_formatted()
    {
        return ucfirst(app(DateFactory::class)->make($this->wrappedObject->completed_at)->format(Config::get('setting.incident_date_format', 'l jS F Y H:i:s')));
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function completed_at_iso()
    {
        return app(DateFactory::class)->make($this->wrappedObject->completed_at)->toISO8601String();
    }

    /**
     * Formats the completed_at time ready to be used by bootstrap-datetimepicker.
     *
     * @return string
     */
    public function completed_at_datetimepicker()
    {
        return app(DateFactory::class)->make($this->wrappedObject->completed_at)->format('d/m/Y H:i');
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

        return $this->completed_at_iso;
    }

    /**
     * Returns a human readable version of the status.
     *
     * @return string
     */
    public function human_status()
    {
        // return trans('cachet.incidents.status.'.$this->wrappedObject->status);
        // TODO: Refactor into translations.
        switch ($this->wrappedObject->status) {
            case 0: return 'Upcoming';
            case 1: return 'In Progress';
            case 2: return 'Complete';
        }
    }

    /**
     * Convert the presenter instance to an array.
     *
     * @return string[]
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'human_status' => $this->human_status(),
            'scheduled_at' => $this->scheduled_at(),
            'completed_at' => $this->completed_at(),
            'created_at'   => $this->created_at(),
            'updated_at'   => $this->updated_at(),
        ]);
    }
}
