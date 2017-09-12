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
     * @param $days
     * @return mixed
     * @internal param $componentId
     */
    public function getComponentUpTimeSinceDays(Component $component, $days );

    /**
     * @param Component $component
     * @param $hours
     * @return mixed
     * @internal param $componentId
     */
    public function getComponentUpTimeSinceHours(Component $component, $hours );
}