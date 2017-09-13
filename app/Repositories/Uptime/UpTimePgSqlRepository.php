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

/**
 * Class UpTimePgSqlRepository
 * @package CachetHQ\Cachet\Repositories\Uptime
 *
 * SELECT
        component_id,
        down_time_hours
        FROM (
        SELECT
        incident_id,
        COUNT(id),
        EXTRACT(
        EPOCH
        FROM (MAX(incident_updates.updated_at)) - MIN(incident_updates.updated_at)
        ) / 3600.0 AS down_time_hours
        FROM
        incident_updates
        WHERE
        updated_at > current_timestamp - INTERVAL '2 day '
        AND
        updated_at < current_timestamp - INTERVAL '0 day '
        GROUP BY
        incident_id
        ) AS updates
        JOIN
        incidents ON updates.incident_id = incidents.id
        WHERE component_id = 1


 */

class UpTimePgSqlRepository extends AbstractUpTimeRepository implements UpTimeInterface
{
    /**
     * @param Component $component
     * @param $toDate
     * @param bool $fromDate
     * @return mixed
     */
    public function getComponentUpTimeSinceHours(Component $component, $toDate, $fromDate = false)
    {

        $tillQuery = $fromDate ? " AND updated_at < {$fromDate} " : "";

        $downTimeHours = DB::select(
            "SELECT  component_id,  down_time_hours FROM ( SELECT incident_id, COUNT(id), EXTRACT( EPOCH FROM ( MAX( incident_updates.updated_at) ) - MIN(incident_updates.updated_at) ) / 3600.0 AS down_time_hours FROM incident_updates WHERE updated_at > '{$toDate}' {$tillQuery} GROUP BY incident_id ) AS updates JOIN incidents ON updates.incident_id = incidents.id WHERE component_id = :componentId",
            [
                "componentId" => $component->id
            ]
        );

        if(empty($downTimeHours))
            return 0;
        else
            return array_reduce($downTimeHours, function($i, $obj) {
                return $i + $obj->down_time_hours;
            });
    }
}