<?php

namespace CachetHQ\Cachet\Repositories\Uptime;
use CachetHQ\Cachet\Models\Component;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\DB;
use Jenssegers\Date\Date;


/**
 * Created by PhpStorm.
 * User: taafedi5
 * Date: 12.09.17
 * Time: 10:35
 */

class UpTimeRepository
{


    private $repository;


    private $userTimeZone = "Europe/Berlin"; // TODO: adapt this automatically

    /**
     * UpTimeRepository constructor.
     * @param $repository
     */
    public function __construct(UpTimeInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * @param $component
     * @param $fromDate
     * @param $toDate
     * @param $tickInHours
     * @return array
     */
    public function ComponentsUpTimeFor($components, Carbon $fromDate, Carbon $toDate, $tickInHours){

        $upTimes = [];

        $incidentsIds = [];

        $fromDateTmp = clone $fromDate;

        $fromDate->addHours($tickInHours);

        $iterations = ($fromDate->getTimestamp() - $toDate->getTimestamp()) / 3600.0 / $tickInHours;

        $toDate = $fromDateTmp;

        foreach(range(0,$iterations-1) as $_){
            $downTime = $this
                ->repository
                ->getComponentUpTimeSinceHours(
                    $components,
                    $toDate->getTimestamp(),
                    $fromDate->getTimestamp()
                );

            //If there's many components (ex group) we take an avg
            $downTime["downTimeHours"]  = $downTime["downTimeHours"] / $components->count();

            if($downTime["downTimeHours"] > $tickInHours ){
                $downTime["downTimeHours"] = $tickInHours;
            }

            $key = $toDate->format('Y-m-d H:i:s');
            $upTimes[$key] = ($tickInHours - $downTime["downTimeHours"]) / $tickInHours * 100.0;
            $incidentsIds[$key] = $downTime["incidentsIds"];
            $fromDate = clone $toDate;
            $toDate->subHours($tickInHours);
        }

        return compact("upTimes","incidentsIds");

    }
    /**
     * @param $date
     * @param $format
     * @return mixed
     */
    private function getDateLabel($date,$format){
        $dateToShow = clone $date;
        $dateToShow->setTimeZone(new DateTimeZone($this->userTimeZone));
        return $dateToShow->format($format);
    }
}
