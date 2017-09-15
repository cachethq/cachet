<?php



namespace CachetHQ\Cachet\Repositories\Uptime;


use CachetHQ\Cachet\Models\Component;
use DateTime;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: taafedi5
 * Date: 12.09.17
 * Time: 13:40
 */

class UpTimePgSqlRepository extends AbstractUpTimeRepository implements UpTimeInterface
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
            "SELECT component_id, down_time_hours,EXTRACT (EPOCH FROM max_time) as max_time, EXTRACT (EPOCH FROM min_time) as min_time FROM ( SELECT incident_id, COUNT(id), EXTRACT( EPOCH FROM ( MAX( incident_updates.updated_at) ) - MIN(incident_updates.updated_at) ) / 3600.0 AS down_time_hours, MAX(incident_updates.updated_at) as max_time, MIN(incident_updates.updated_at) as min_time FROM incident_updates GROUP BY incident_id ) AS updates JOIN incidents ON updates.incident_id = incidents.id WHERE component_id = :componentId",
            [
                "componentId" => $component->id
            ]
        );


        return $this->getHoursOverlapping($result,$toDateEpoch,$fromDateEpoch);
    }
}