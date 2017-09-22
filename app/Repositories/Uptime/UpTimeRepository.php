<?php

namespace CachetHQ\Cachet\Repositories\Uptime;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\DB;


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



    private function getStartDates($format){
        $fromDate = new DateTime();
        $fromDate->setTimezone(new DateTimeZone($this->userTimeZone));
        $toDate = DateTime::createFromFormat($format, $fromDate->format($format));
        return compact("fromDate", "toDate");
    }


    /**
     * @param $component
     * @param $days
     * @return array
     * @internal param $componentId
     */
    public function ComponentUpTimeForLastDays($component, $days){

        $dates = $this->getStartDates("Y-m-d H-m");
        $fromDate = $dates["fromDate"];
        $toDate = $dates["toDate"];

        // 1st iteration : substract hours and minutes ex: Wed: 14:37 -> compute uptime for last 14:37 hours
        // 2nd iteration: uptime for Tuesday ( 24H ), Monday ( 24H ) etc...

        $upTimes = [];

        for($i = 1; $i <= $days; $i ++){

            $diff = $fromDate->diff($toDate);

            $periodInHours = $diff->h > 0 ? $diff->h : 24.0;

            if($periodInHours == 24.0){
                $fromDate->setTime(0,0,0);
                $toDate->setTime(0,0,0);
            }


            $downTime = $this
                ->repository
                ->getComponentUpTimeSinceHours(
                    $component,
                    $toDate->getTimestamp(),
                    $fromDate->getTimestamp()
                );

            $upTimes[$toDate->format('Y-m-d')] = ($periodInHours - $downTime) / $periodInHours * 100.0;
            $fromDate = clone $toDate;
            $toDate->modify("-1 day");
        }

        return $upTimes;
    }


    /**
     * @param $component
     * @param $hours
     * @return mixed
     * @internal param $componentId
     */
    public function ComponentUpTimesForLastHours($component, $hours){

        $dates = $this->getStartDates("H");
        $fromDate = $dates["fromDate"];
        $toDate = $dates["toDate"];

        // 1st iteration : substract minutes ex: 14:37 -> compute uptime for 37 minutes
        // 2nd iteration: uptime for 13:00 to 14:00, 3th 12:00 to 13:00 etc...

        $upTimes = [];

        for($i = 1; $i <= $hours; $i ++){
            $downTime = $this
                ->repository
                ->getComponentUpTimeSinceHours(
                    $component,
                    $toDate->getTimestamp(),
                    $fromDate->getTimestamp()
                );
            $upTimes[$toDate->format('Y-m-d H:i')] = (1.0 - $downTime) * 100.0;
            $fromDate = clone $toDate;
            $toDate->modify("-1 hour");
        }

        return $upTimes;
    }
}