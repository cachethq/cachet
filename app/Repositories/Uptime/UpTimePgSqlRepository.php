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

        $this->currentComponent = $component;

        $result = DB::select(
            "SELECT component_id,incidents.name, incidents.id as id,  EXTRACT (EPOCH FROM max_time) as max_time, EXTRACT (EPOCH FROM incidents.occurred_at) as min_time FROM ( SELECT incident_id, COUNT(incident_updates.id), COUNT(incidents.occurred_at), MAX(incident_updates.updated_at) as max_time, incidents.occurred_at as min_time FROM incident_updates JOIN incidents ON incident_id=incidents.id WHERE incident_updates.status = ".self::FIXED_UPDATE_STATUS_ID." GROUP BY incident_id,incidents.occurred_at ) AS updates RIGHT JOIN incidents ON updates.incident_id = incidents.id WHERE component_id = :componentId AND incidents.component_status IN (".implode(',',self::DOWN_TIME_STATUSES)." )",
            [
                "componentId" => $component->id,
            ]
        );



        return $this->getDownTimesHoursAndIncidentsId($result,$toDateEpoch,$fromDateEpoch);
    }
}