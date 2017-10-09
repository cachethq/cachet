<?php



namespace CachetHQ\Cachet\Repositories\Uptime;


use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentUpdate;
use Carbon\Carbon;
use DateTime;
use Illuminate\Config\Repository;

/**
 * Created by PhpStorm.
 * User: taafedi5
 * Date: 12.09.17
 * Time: 13:34
 */

class AbstractUpTimeRepository
{

    protected $config;


    const DOWN_TIME_STATUSES = [4];
    const FIXED_UPDATE_STATUS_ID = 4;

    /**
     * AbstractUpTimeRepository constructor.
     * @param Repository $config
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    protected function getIncidentsTable(){
        $prefix = app(System::class)->getTablePrefix();
        return $prefix."incidents";
    }


    protected function getIncidentsUpdatesTable(){
        $prefix = app(System::class)->getTablePrefix();
        return $prefix."incident_update";
    }


    /**
     * @param $result
     * @param $toDateEpoch
     * @param $fromDateEpoch
     * @return array
     */
    protected function getDownTimesHoursAndIncidentsId($result, $toDateEpoch, $fromDateEpoch){
        $downTimeHours = $this->getHours($result,$toDateEpoch,$fromDateEpoch);
        $incidentsIds = collect($result)->filter(function ($e) use ($toDateEpoch,$fromDateEpoch){
            return $this->getHoursOverlapping($e,$toDateEpoch,$fromDateEpoch) > 0;
        })->map(function($e) use ($toDateEpoch,$fromDateEpoch){
            $incidentUpdates = IncidentUpdate::where("incident_id",$e->id);
            $fixedUpdate = $incidentUpdates->where("incident_updates.status", 4);
            $fixedUpdateExists = $fixedUpdate->exists();
            return [
                "id" => $e->id,
                "name" => $e->name,
                "down_time_hours" => $this->getHoursOverlapping($e,$toDateEpoch,$fromDateEpoch),
                "updates" => $incidentUpdates->count(),
                "fixed" => $fixedUpdateExists,
                "fixed_at" => $fixedUpdateExists ? $fixedUpdate->first()->created_at->getTimeStamp() : NULL,
                "min_date" => $e->min_time,
                "max_date" => $e->max_time,
            ];
        })->values();

        //dd($incidentsIds);
        return compact("downTimeHours","incidentsIds");
    }

    /**
     * @param $row
     * @param $toDateEpoch
     * @param $fromDateEpoch
     * @return float
     */
    protected function getHoursOverlapping($row,$toDateEpoch,$fromDateEpoch){
        $minDateEpoch = $row->min_time ;
        $maxDateEpoch = $row->max_time !== NULL ? $row->max_time : Carbon::now()->getTimestamp();
        return max(
            min($maxDateEpoch,$fromDateEpoch) - max($toDateEpoch,$minDateEpoch) + 1, 0
        ) / 3600.0;
    }

    /**
     * @param $result
     * @param $toDateEpoch
     * @param $fromDateEpoch
     * @return int|mixed
     */
    protected function getHours($result, $toDateEpoch, $fromDateEpoch){

      //We return the sum instead of the avg here, because we need to take the up hours in count
      return collect($result)->groupBy('component_id')->map(function($r) use ($toDateEpoch, $fromDateEpoch){
          return $r->reduce(function ($i, $obj) use ($toDateEpoch, $fromDateEpoch) {
              return $i + $this->getHoursOverlapping($obj, $toDateEpoch, $fromDateEpoch);
          },0);
      })->sum();
    }

}
