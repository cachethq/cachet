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

use CachetHQ\Cachet\Models\Schedule;
use CachetHQ\Cachet\Presenters\Traits\TimestampsTrait;
use CachetHQ\Cachet\Services\Dates\DateFactory;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Contracts\Support\Arrayable;
use McCool\LaravelAutoPresenter\BasePresenter;

/**
 * This is the schedule presenter class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SchedulePresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Services\Dates\DateFactory
     */
    protected $dates;

    /**
     * Create a new presenter.
     *
     * @param \CachetHQ\Cachet\Services\Dates\DateFactory $dates
     * @param \CachetHQ\Cachet\Models\Schedule            $resource
     *
     * @return void
     */
    public function __construct(DateFactory $dates, Schedule $resource)
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
     * Formats the created_at time ready to be used by bootstrap-datetimepicker.
     *
     * @return string
     */
    public function created_at_datetimepicker()
    {
        return $this->dates->make($this->wrappedObject->created_at)->format('Y-m-d H:i');
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
     * Present formatted date time.
     *
     * @return string
     */
    public function scheduled_at()
    {
        return $this->dates->make($this->wrappedObject->scheduled_at)->toDateTimeString();
    }

    /**
     * Present diff for humans date time.
     *
     * @return string
     */
    public function scheduled_at_diff()
    {
        return $this->dates->make($this->wrappedObject->scheduled_at)->diffForHumans();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function scheduled_at_formatted()
    {
        return ucfirst($this->dates->make($this->wrappedObject->scheduled_at)->format($this->incidentDateFormat()));
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function scheduled_at_iso()
    {
        return $this->dates->make($this->wrappedObject->scheduled_at)->toISO8601String();
    }

    /**
     * Formats the scheduled_at time ready to be used by bootstrap-datetimepicker.
     *
     * @return string
     */
    public function scheduled_at_datetimepicker()
    {
        return $this->dates->make($this->wrappedObject->scheduled_at)->format('Y-m-d H:i');
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
        return $this->dates->make($this->wrappedObject->completed_at)->toDateTimeString();
    }

    /**
     * Present diff for humans date time.
     *
     * @return string
     */
    public function completed_at_diff()
    {
        return $this->dates->make($this->wrappedObject->completed_at)->diffForHumans();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function completed_at_formatted()
    {
        return ucfirst($this->dates->make($this->wrappedObject->completed_at)->format($this->incidentDateFormat()));
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function completed_at_iso()
    {
        return $this->dates->make($this->wrappedObject->completed_at)->toISO8601String();
    }

    /**
     * Formats the completed_at time ready to be used by bootstrap-datetimepicker.
     *
     * @return string
     */
    public function completed_at_datetimepicker()
    {
        return $this->dates->make($this->wrappedObject->completed_at)->format('Y-m-d H:i');
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
