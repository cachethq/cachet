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

use CachetHQ\Cachet\Presenters\Traits\TimestampsTrait;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Facades\Config;
use Jenssegers\Date\Date;
use McCool\LaravelAutoPresenter\BasePresenter;

class IncidentPresenter extends BasePresenter implements Arrayable
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
        return (new Date($this->wrappedObject->created_at))
            ->setTimezone(Config::get('cachet.timezone'))
            ->diffForHumans();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function created_at_formatted()
    {
        return ucfirst((new Date($this->wrappedObject->created_at))
            ->setTimezone(Config::get('cachet.timezone'))
            ->format(Config::get('setting.incident_date_format', 'l jS F Y H:i:s')));
    }

    /**
     * Formats the created_at time ready to be used by bootstrap-datetimepicker.
     *
     * @return string
     */
    public function created_at_datetimepicker()
    {
        return $this->wrappedObject->created_at->setTimezone(Config::get('cachet.timezone'))->format('d/m/Y H:i');
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function created_at_iso()
    {
        return $this->wrappedObject->created_at->setTimezone(Config::get('cachet.timezone'))->toISO8601String();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function scheduled_at()
    {
        return (new Date($this->wrappedObject->scheduled_at))
            ->setTimezone(Config::get('cachet.timezone'))->toDateTimeString();
    }

    /**
     * Present diff for humans date time.
     *
     * @return string
     */
    public function scheduled_at_diff()
    {
        return (new Date($this->wrappedObject->scheduled_at))
            ->setTimezone(Config::get('cachet.timezone'))
            ->diffForHumans();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function scheduled_at_formatted()
    {
        return ucfirst((new Date($this->wrappedObject->scheduled_at))
            ->setTimezone(Config::get('cachet.timezone'))
            ->format(Config::get('setting.incident_date_format', 'l jS F Y H:i:s')));
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function scheduled_at_iso()
    {
        return $this->wrappedObject->scheduled_at->setTimezone(Config::get('cachet.timezone'))->toISO8601String();
    }

    /**
     * Formats the scheduled_at time ready to be used by bootstrap-datetimepicker.
     *
     * @return string
     */
    public function scheduled_at_datetimepicker()
    {
        return $this->wrappedObject->scheduled_at->setTimezone(Config::get('cachet.timezone'))->format('d/m/Y H:i');
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
        } else {
            return $this->created_at_formatted;
        }
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
        } else {
            return $this->created_at_iso;
        }
    }

    /**
     * Present the status with an icon.
     *
     * @return string
     */
    public function icon()
    {
        switch ($this->wrappedObject->status) {
            case 0: // Scheduled
                return 'icon ion-android-calendar';
            case 1: // Investigating
                return 'icon ion-flag oranges';
            case 2: // Identified
                return 'icon ion-alert yellows';
            case 3: // Watching
                return 'icon ion-eye blues';
            case 4: // Fixed
                return 'icon ion-checkmark greens';
            default: // Something actually broke, this shouldn't happen.
                return '';
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
     * Convert the presenter instance to an array.
     *
     * @return string[]
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'human_status' => $this->human_status(),
            'scheduled_at' => $this->scheduled_at(),
            'created_at'   => $this->created_at(),
            'updated_at'   => $this->updated_at(),
        ]);
    }
}
