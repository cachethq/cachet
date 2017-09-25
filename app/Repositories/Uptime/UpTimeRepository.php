<?php

namespace CachetHQ\Cachet\Repositories\Uptime;
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
     * @param $days
     * @return array
     * @internal param $componentId
     */
    public function ComponentUpTimeForLastDays($component, $days){

        $fromDate = new DateTime("now");
        $toDate = new DateTime("now");
        $toDate->setTime(0,0,0);
        $fromDate->setTime(0,0,0);
        $fromDate->modify("+1 day");

        // 1st iteration : substract hours and minutes ex: Wed: 14:37 -> compute uptime for last 14:37 hours
        // 2nd iteration: uptime for Tuesday ( 24H ), Monday ( 24H ) etc...

        $upTimes = [];
        $incidentsIds = [];

        $periodInHours = 24.0;

        for($i = 1; $i <= $days; $i ++){
            $downTime = $this
                ->repository
                ->getComponentUpTimeSinceHours(
                    $component,
                    $toDate->getTimestamp(),
                    $fromDate->getTimestamp()
                );

            $key = $toDate->format('Y-m-d');
            $upTimes[$key] = ($periodInHours - $downTime["downTimeHours"]) / $periodInHours * 100.0;
            $incidentsIds[$key] = $downTime["incidentsIds"];
            $fromDate = clone $toDate;
            $toDate->modify("-1 day");
        }

        return compact("upTimes","incidentsIds");
    }


    /**
     * @param $component
     * @param $hours
     * @return mixed
     * @internal param $componentId
     */
    public function ComponentUpTimesForLastHours($component, $hours){

        $fromDate = new DateTime("now");
        $toDate = new DateTime("now");
        $fromDate->modify("+1 hour");
        $fromDate->setTime($fromDate->format("H"),0,0);
        $toDate->setTime($toDate->format("H"),0,0);

        // 1st iteration : substract minutes ex: 14:37 -> compute uptime for 37 minutes
        // 2nd iteration: uptime for 13:00 to 14:00, 3th 12:00 to 13:00 etc...

        $upTimes = [];
        $incidentsIds = [];

        for($i = 1; $i <= $hours; $i ++){

            $downTime = $this
                ->repository
                ->getComponentUpTimeSinceHours(
                    $component,
                    $toDate->getTimestamp(),
                    $fromDate->getTimestamp()
                );



            if($downTime["downTimeHours"] > 1.0 ){
                $downTime["downTimeHours"] = 1.0;
            }

            $key = $this->getDateLabel($toDate, 'Y-m-d H:i:s');
            $upTimes[$key] = (1.0 - $downTime["downTimeHours"]) * 100.0;
            $incidentsIds[$key] = $downTime["incidentsIds"];
            $fromDate = clone $toDate;
            $toDate->modify("-1 hour");
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