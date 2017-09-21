<?php

use CachetHQ\Cachet\Repositories\Uptime\AbstractUpTimeRepository;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: taafedi5
 * Date: 12.09.17
 * Time: 10:47
 */

class UpTimeMySqlRepository extends AbstractUpTimeRepository implements UpTimeInterface
{

    /**
     * @param Component $component
     * @param $toDateEpoch
     * @param bool $fromDateEpoch
     * @return mixed
     */
    public function getComponentUpTimeSinceHours(Component $component, $toDateEpoch, $fromDateEpoch = false)
    {

        $result = DB::select(
            "SELECT component_id, down_time_hours, UNIX_TIMESTAMP(max_time) as max_time, UNIX_TIMESTAMP(incidents.occured_at) as min_time FROM ( SELECT incident_id, COUNT(incident_updates.id), COUNT(incidents.created_at), UNIX_TIMESTAMP( MAX( incident_updates.updated_at)  - MIN(incidents.occured_at) ) / 3600.0 AS down_time_hours, MAX(incident_updates.updated_at) as max_time, MIN(incident_updates.updated_at) as min_time FROM incident_updates JOIN incidents ON incident_id=incidents.id GROUP BY incident_id ) AS updates JOIN incidents ON updates.incident_id = incidents.id WHERE component_id = :componentId AND incidents.component_status IN (".implode(',',self::DOWN_TIME_STATUSES)." )",
            [
                "componentId" => $component->id
            ]
        );

        return $this->getHoursOverlapping($result,$toDateEpoch,$fromDateEpoch);
    }
}