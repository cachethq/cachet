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

use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Models\Metric;
use DateInterval;

class MetricRepository
{
    /**
     * Metric repository.
     *
     * @var \CachetHQ\Cachet\Repositories\Metric\MetricInterface
     */
    protected $repository;

    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Dates\DateFactory
     */
    protected $dates;

    /**
     * Create a new metric repository class.
     *
     * @param \CachetHQ\Cachet\Repositories\Metric\MetricInterface $repository
     * @param \CachetHQ\Cachet\Dates\DateFactory                   $dates
     *
     * @return void
     */
    public function __construct(MetricInterface $repository, DateFactory $dates)
    {
        $this->repository = $repository;
        $this->dates = $dates;
    }

    /**
     * Returns all points as an array, for the last hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return array
     */
    public function listPointsLastHour(Metric $metric)
    {
        $dateTime = $this->dates->make();

        $points = [];

        $pointKey = $dateTime->format('H:i');

        for ($i = 0; $i <= 60; $i++) {
            $points[$pointKey] = $this->repository->getPointsLastHour($metric, 0, $i);
            $pointKey = $dateTime->sub(new DateInterval('PT1M'))->format('H:i');
        }

        return array_reverse($points);
    }

    /**
     * Returns all points as an array, by x hours.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hours
     *
     * @return array
     */
    public function listPointsToday(Metric $metric, $hours = 12)
    {
        $dateTime = $this->dates->make();

        $points = [];

        $pointKey = $dateTime->format('H:00');

        for ($i = 0; $i <= $hours; $i++) {
            $points[$pointKey] = $this->repository->getPointsByHour($metric, $i);
            $pointKey = $dateTime->sub(new DateInterval('PT1H'))->format('H:00');
        }

        return array_reverse($points);
    }

    /**
     * Returns all points as an array, in the last week.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return array
     */
    public function listPointsForWeek(Metric $metric)
    {
        $dateTime = $this->dates->make();

        $points = [];

        $pointKey = $dateTime->format('D jS M');

        for ($i = 0; $i <= 7; $i++) {
            $points[$pointKey] = $this->repository->getPointsForDayInWeek($metric, $i);
            $pointKey = $dateTime->sub(new DateInterval('P1D'))->format('D jS M');
        }

        return array_reverse($points);
    }

    /**
     * Returns all points as an array, in the last month.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return array
     */
    public function listPointsForMonth(Metric $metric)
    {
        $dateTime = $this->dates->make();

        $daysInMonth = $dateTime->format('t');

        $points = [];

        $pointKey = $dateTime->format('jS M');

        for ($i = 0; $i <= $daysInMonth; $i++) {
            $points[$pointKey] = $this->repository->getPointsForDayInWeek($metric, $i);
            $pointKey = $dateTime->sub(new DateInterval('P1D'))->format('jS M');
        }

        return array_reverse($points);
    }
}
