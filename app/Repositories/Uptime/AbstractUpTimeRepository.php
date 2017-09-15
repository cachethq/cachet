<?php



namespace CachetHQ\Cachet\Repositories\Uptime;


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
     * @return int|mixed
     */
    protected function getHoursOverlapping($result, $toDateEpoch, $fromDateEpoch){
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
                    return $i + ($maxDateEpoch - $toDateEpoch) / 3600.0;
                }
                else {
                    return $i;
                }
            });
    }

}