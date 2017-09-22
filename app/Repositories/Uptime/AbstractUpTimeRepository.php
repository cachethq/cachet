<?php



namespace CachetHQ\Cachet\Repositories\Uptime;


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
        $incidentsIds = array_map(function($e){
            return [
                "id" => $e->id,
                "name" => $e->name,
                "min_date" => $e->min_time,
                "max_date" => $e->max_time,
            ];
        }, array_filter($result, function ($e) use ($toDateEpoch,$fromDateEpoch){
            return $this->getHoursOverlapping($e,$toDateEpoch,$fromDateEpoch) > 0;
        }));
        return compact("downTimeHours","incidentsIds");
    }

    /**
     * @param $row
     * @param $toDateEpoch
     * @param $fromDateEpoch
     * @return float
     */
    protected function getHoursOverlapping($row,$toDateEpoch,$fromDateEpoch){
        $minDateEpoch = $row->min_time;
        $maxDateEpoch = $row->max_time;
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
        if(empty($result))
            return 0;
        else
            return array_reduce($result, function($i, $obj) use ($toDateEpoch, $fromDateEpoch) {
                return $i + $this->getHoursOverlapping($obj,$toDateEpoch,$fromDateEpoch);
            });
    }

}