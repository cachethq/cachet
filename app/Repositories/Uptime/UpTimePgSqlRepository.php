<?php



namespace CachetHQ\Cachet\Repositories\Uptime;


use CachetHQ\Cachet\Models\Component;
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
     * @param $days
     * @return mixed
     * @internal param $componentId
     */
    public function getComponentUpTimeSinceDays(Component $component, $days)
    {
        // TODO: Implement getComponentUpTimeSinceDays() method.
    }

    /**
     * @param Component $component
     * @param $hours
     * @return mixed
     * @internal param $componentId
     */
    public function getComponentUpTimeSinceHours(Component $component, $hours)
    {
        $downTimeHours = DB::select(
            "SELECT  component_id,  down_time_hours FROM ( SELECT incident_id, COUNT(id), EXTRACT( EPOCH FROM ( MAX( incident_updates.updated_at) ) - MIN(incident_updates.updated_at) ) / 3600.0 AS down_time_hours FROM incident_updates WHERE updated_at > current_timestamp - INTERVAL '{$hours}' HOUR GROUP BY incident_id ) AS updates JOIN incidents ON updates.incident_id = incidents.id WHERE component_id = :componentId",
            [
                "componentId" => $component->id
            ]
        );

        if(empty($downTimeHours))
            return 0;
        else
            return $downTimeHours[0]->down_time_hours;
    }
}