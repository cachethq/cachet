<?php

namespace CachetHQ\Cachet\Repositories\Uptime;


/**
 * Created by PhpStorm.
 * User: taafedi5
 * Date: 12.09.17
 * Time: 10:35
 */

class UpTimeRepository
{


    private $repository;

    /**
     * UpTimeRepository constructor.
     * @param $repository
     */
    public function __construct(UpTimeInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * @param $componentId
     * @param $days
     */
    public function ComponentUpTimeForLastDays($componentId, $days){

    }


    /**
     * @param $component
     * @param $hours
     * @return mixed
     * @internal param $componentId
     */
    public function ComponentUpTimeForLastHours($component, $hours){
        $downTimeHours = $this->repository->getComponentUpTimeSinceHours($component, $hours);
        return ($hours - $downTimeHours) / $hours * 100.0;
    }
}