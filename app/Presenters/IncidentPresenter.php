<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Presenters;

use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\Incident;
use GrahamCampbell\Markdown\Facades\Markdown;
use Jenssegers\Date\Date;
use McCool\LaravelAutoPresenter\BasePresenter;

class IncidentPresenter extends BasePresenter
{
    /**
     * Time zone setting.
     *
     * @var string
     */
    protected $tz;

    /**
     * Create a incident presenter instance.
     *
     * @param object $resource
     */
    public function __construct($resource)
    {
        parent::__construct($resource);

        $this->tz = Setting::get('app_timezone');
        $this->format = Setting::get('incident_date_format') ?: 'l jS F Y H:i:s';
    }

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
            ->setTimezone($this->tz)
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
            ->setTimezone($this->tz)
            ->format($this->format));
    }

    /**
     * Formats the created_at time ready to be used by bootstrap-datetimepicker.
     *
     * @return string
     */
    public function created_at_datetimepicker()
    {
        return $this->wrappedObject->created_at->setTimezone($this->tz)->format('d/m/Y H:i');
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function created_at_iso()
    {
        return $this->wrappedObject->created_at->setTimezone($this->tz)->toISO8601String();
    }

    /**
     * Present diff for humans date time.
     *
     * @return string
     */
    public function scheduled_at_diff()
    {
        return (new Date($this->wrappedObject->scheduled_at))
            ->setTimezone($this->tz)
            ->diffForHumans();
    }

    /**
     * Present formated date time.
     *
     * @return string
     */
    public function scheduled_at_formatted()
    {
        return ucfirst((new Date($this->wrappedObject->scheduled_at))
            ->setTimezone($this->tz)
            ->format($this->format));
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function scheduled_at_iso()
    {
        return $this->wrappedObject->scheduled_at->setTimezone($this->tz)->toISO8601String();
    }

    /**
     * Formats the scheduled_at time ready to be used by bootstrap-datetimepicker.
     *
     * @return string
     */
    public function scheduled_at_datetimepicker()
    {
        return $this->wrappedObject->scheduled_at->setTimezone($this->tz)->format('d/m/Y H:i');
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
                return 'icon ion-flag';
            case 2: // Identified
                return 'icon ion-alert';
            case 3: // Watching
                return 'icon ion-eye';
            case 4: // Fixed
                return 'icon ion-checkmark';
            default: // Something actually broke, this shouldn't happen.
                return '';
        }
    }
}
