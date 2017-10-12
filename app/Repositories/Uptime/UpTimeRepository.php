<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Repositories\Uptime;

use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Jenssegers\Date\Date;

/**
 * UpTime repository where we calculate the uptimes based on incidents.
 *
 * @author Ferreira Venancio Diogo <Diogo.FerreiraVenancio@swisscom.com>
 */
class UpTimeRepository
{

    private $repository;

    private $userTimeZone = 'Europe/Berlin'; // TODO: adapt this automatically

    /**
     * UpTimeRepository constructor.
     *
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
     *
     * @return array
     */
    public function ComponentsUpTimeFor(Collection $components, Carbon $fromDate, Carbon $toDate, $tickInHours)
    {

        //Uptimes by chunk of time
        $upTimes = [];

        //Incidents by chunk of time
        $incidents = [];

        $fromDateTmp = clone $fromDate;

        $fromDate->addHours($tickInHours);

        $iterations = ($fromDate->getTimestamp() - $toDate->getTimestamp()) / 3600.0 / $tickInHours;

        $toDate = $fromDateTmp;

        //avaibility for the date range
        $avaibility = 0;

        //Fetch data from DB only once for all components
        $incidentsAndUpdates = $this->repository->getComponentsIncidentsAndUpdates($components);

        //For each time chunk, we compute the downtime and the avaibility
        foreach(range(0,$iterations - 1) as $_){
            $downTime = $this
                ->repository
                ->getDownTimesHoursAndIncidents(
                    $incidentsAndUpdates,
                    $toDate->getTimestamp(),
                    $fromDate->getTimestamp()
                );

            //If there's many components (ex group) we take an avg
            $downTime['downTimeHours'] = $downTime['downTimeHours'] / $components->count();

            if($downTime['downTimeHours'] > $tickInHours ) {
                $downTime['downTimeHours'] = $tickInHours;
            }

            $avaibility += $downTime['downTimeHours'];
            $key = $toDate->format('Y-m-d H:i:s');
            $upTimes[$key] = ($tickInHours - $downTime['downTimeHours']) / $tickInHours * 100.0;
            $incidents[$key] = $downTime['incidents'];
            $fromDate = clone $toDate;
            $toDate->subHours($tickInHours);
        }

        $avaibility = (($tickInHours * $iterations) - $avaibility) / ($tickInHours * $iterations);

        return compact('upTimes', 'incidents', 'avaibility');
    }

    /**
     * @param $date
     * @param $format
     *
     * @return mixed
     */
    private function getDateLabel($date, $format)
    {
        $dateToShow = clone $date;
        $dateToShow->setTimeZone(new DateTimeZone($this->userTimeZone));

        return $dateToShow->format($format);
    }
}
