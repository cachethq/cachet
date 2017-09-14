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


        if(empty($result))
            return 0;
        else
            return array_reduce($result, function($i, $obj) use ($toDateEpoch, $fromDateEpoch) {

                $minDateEpoch = $obj->min_time;
                $maxDateEpoch = $obj->max_time;

                // TODO: find a more elegant way to do this
                if($minDateEpoch < $toDateEpoch && $fromDateEpoch < $maxDateEpoch){
                    return $i + ($fromDateEpoch - $toDateEpoch) / 3600.0;
                }
                else if($fromDateEpoch - $minDateEpoch <= ($fromDateEpoch - $toDateEpoch) && $fromDateEpoch - $minDateEpoch > 0){
                    return $i + ($fromDateEpoch - $minDateEpoch) / 3600.0;
                }
                else if($maxDateEpoch - $toDateEpoch <= ($fromDateEpoch - $toDateEpoch) && $maxDateEpoch - $toDateEpoch > 0){
                    return $i + ($maxDateEpoch - $toDateEpoch)/ 3600.0;
                }
                else {
                    return $i;
                }
            });
    }
}