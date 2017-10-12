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

use Illuminate\Support\Collection;

interface UpTimeInterface
{
    /**
     * @param $component
     * @param $toDate
     * @param null $fromDate
     *
     * @return mixed
     */
    public function getComponentsIncidentsAndUpdates(Collection $components);
}
