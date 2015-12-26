<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Repositories\Metric;

use CachetHQ\Cachet\Facades\Setting;

abstract class AbstractMetricRepository
{
    /**
     * The timezone the status page is showing in.
     *
     * @var string
     */
    protected $dateTimeZone;

    /**
     * Create a new abstract metric repository class.
     *
     * @return void
     */
    public function __construct()
    {
        $this->dateTimeZone = Setting::get('app_timezone');
    }
}
