<?php


namespace CachetHQ\Cachet\Repositories\Uptime;


use CachetHQ\Cachet\Models\Component;


/**
 * Created by PhpStorm.
 * User: taafedi5
 * Date: 12.09.17
 * Time: 10:38
 */

interface UpTimeInterface
{

    /**
     * @param Component $component
     * @param $toDate
     * @param null $fromDate
     * @return mixed
     */
    public function getComponentUpTimeSinceHours(Component $component, $toDate, $fromDate = null);
}