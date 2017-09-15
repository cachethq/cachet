<?php

use CachetHQ\Cachet\Repositories\Uptime\AbstractUpTimeRepository;

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
            "SELECT component_id, down_time_hours,UNIX_TIMESTMAP(max_time) as max_time, UNIX_TIMESTAMP(min_time) as min_time FROM ( SELECT incident_id, COUNT(id), UNIX_TIMESTAMP( MAX( incident_updates.updated_at) - MIN(incident_updates.updated_at) ) / 3600.0 AS down_time_hours, MAX(incident_updates.updated_at) as max_time, MIN(incident_updates.updated_at) as min_time FROM incident_updates GROUP BY incident_id ) AS updates JOIN incidents ON updates.incident_id = incidents.id WHERE component_id = :componentId",
            [
                "componentId" => $component->id
            ]
        );

        return $this->getHoursOverlapping($result,$toDateEpoch,$fromDateEpoch);
    }
}