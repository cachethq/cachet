<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Repositories\Uptime;

use CachetHQ\Cachet\Models\IncidentUpdate;
use Carbon\Carbon;
use Illuminate\Contracts\Config\Repository;

/**
 * This is the abstract UpTime repository class.
 *
 * @author Diogo Ferreira Venancio <Diogo.FerreiraVenancio@swisscom.com>
 */
class AbstractUpTimeRepository
{
    /**
     * The illuminate config repository.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Component's statuses that count as down time.
     */
    const DOWN_TIME_STATUSES = [4];

    /**
     * ID of the Incident update's status "FIXED".
     */
    const FIXED_UPDATE_STATUS_ID = 4;

     /**
     * Create a new abstract uptime repository instance.
     *
     * @param \Illuminate\Contracts\Config\Repository $config
     *
     * @return void
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    /**
     * Get the Incidents table name.
     *
     * @return string
     */
    protected function getIncidentsTable()
    {
        $prefix = app(System::class)->getTablePrefix();

        return $prefix.'incidents';
    }

    /**
     * Get the IncidentsUpdates table name.
     *
     * @return string
     */
    protected function getIncidentsUpdatesTable()
    {
        $prefix = app(System::class)->getTablePrefix();

        return $prefix.'incident_update';
    }

    /**
     * @param $result
     * @param $toDateEpoch
     * @param $fromDateEpoch
     *
     * @return array
     */
    public function getDownTimesHoursAndIncidents($result, $toDateEpoch, $fromDateEpoch)
    {
        $downTimeHours = $this->getHours($result, $toDateEpoch, $fromDateEpoch);
        $incidents = collect($result)->filter(function ($e) use ($toDateEpoch, $fromDateEpoch) {
            return $this->getHoursOverlapping($e, $toDateEpoch, $fromDateEpoch) > 0;
        })->map(function ($e) use ($toDateEpoch, $fromDateEpoch) {
            $incidentUpdates = IncidentUpdate::where('incident_id', $e->id);
            $fixedUpdate = $incidentUpdates->where('incident_updates.status', self::FIXED_UPDATE_STATUS_ID);
            $fixedUpdateExists = $fixedUpdate->exists();

            return [
                'id'                => $e->id,
                'name'              => $e->name,
                'down_time_hours'   => $this->getHoursOverlapping($e, $toDateEpoch, $fromDateEpoch),
                'updates'           => $incidentUpdates->count(),
                'fixed'             => $fixedUpdateExists,
                'fixed_at'          => $fixedUpdateExists ? $fixedUpdate->first()->created_at->getTimeStamp() : null,
                'min_date'          => $e->min_time,
                'max_date'          => $e->max_time,
            ];
        })->values();

        return compact('downTimeHours', 'incidents');
    }

    /**
     * Returns the overlapping time between an incident (Start till Fixed update or till now)
     * and the current time chunck (For instance 8pm to 9pm).
     * 
     * @param $row
     * @param $toDateEpoch
     * @param $fromDateEpoch
     *
     * @return float
     */
    protected function getHoursOverlapping($row, $toDateEpoch, $fromDateEpoch)
    {
        $minDateEpoch = $row->min_time;
        $maxDateEpoch = $row->max_time !== null ? $row->max_time : Carbon::now()->getTimestamp();

        return max(
            min($maxDateEpoch, $fromDateEpoch) - max($toDateEpoch, $minDateEpoch) + 1, 0
        ) / 3600.0;
    }

    /**
     * @param $result
     * @param $toDateEpoch
     * @param $fromDateEpoch
     *
     * @return int|mixed
     */
    protected function getHours($result, $toDateEpoch, $fromDateEpoch)
    {

        //We return the sum instead of the avg here, because we need to take the up hours in count
        return collect($result)->groupBy('component_id')->map(function ($r) use ($toDateEpoch, $fromDateEpoch) {
            return $r->reduce(function ($i, $obj) use ($toDateEpoch, $fromDateEpoch) {
                return $i + $this->getHoursOverlapping($obj, $toDateEpoch, $fromDateEpoch);
            }, 0);
        })->sum();
    }
}
