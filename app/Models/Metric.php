<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models;

use AltThree\Validator\ValidatingTrait;
use CachetHQ\Cachet\Facades\Setting as SettingFacade;
use CachetHQ\Cachet\Presenters\MetricPresenter;
use DateInterval;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Jenssegers\Date\Date;
use McCool\LaravelAutoPresenter\HasPresenter;

class Metric extends Model implements HasPresenter
{
    use ValidatingTrait;

    const CALC_SUM = 0;
    const CALC_AVG = 1;

    /**
     * The model's attributes.
     *
     * @var string[]
     */
    protected $attributes = [
        'name'          => '',
        'display_chart' => 1,
        'default_value' => 0,
        'calc_type'     => 0,
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'          => 'required',
        'suffix'        => 'required',
        'display_chart' => 'boolean',
        'default_value' => 'numeric',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'suffix', 'description', 'display_chart', 'default_value', 'calc_type'];

    /**
     * The relations to eager load on every query.
     *
     * @var string[]
     */
    protected $with = ['points'];

    /**
     * Metrics contain many metric points.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function points()
    {
        return $this->hasMany(MetricPoint::class, 'metric_id', 'id');
    }

    /**
     * Returns the sum of all values a metric has by the hour.
     *
     * @param int $hour
     *
     * @return int
     */
    public function getValuesByHour($hour)
    {
        $dateTimeZone = SettingFacade::get('app_timezone');
        $dateTime = (new Date())->setTimezone($dateTimeZone)->sub(new DateInterval('PT'.$hour.'H'));

        $hourInterval = $dateTime->format('YmdH');

        if (Config::get('database.default') === 'mysql') {
            if (!isset($this->calc_type) || $this->calc_type == self::CALC_SUM) {
                $value = (int) $this->points()
                                    ->whereRaw('DATE_FORMAT(created_at, "%Y%m%d%H") = '.$hourInterval)
                                    ->groupBy(DB::raw('HOUR(created_at)'))->sum('value');
            } elseif ($this->calc_type == self::CALC_AVG) {
                $value = (int) $this->points()
                                    ->whereRaw('DATE_FORMAT(created_at, "%Y%m%d%H") = '.$hourInterval)
                                    ->groupBy(DB::raw('HOUR(created_at)'))->avg('value');
            }
        } else {
            // Default metrics calculations.
            if (!isset($this->calc_type) || $this->calc_type == self::CALC_SUM) {
                $queryType = 'sum(metric_points.value)';
            } elseif ($this->calc_type == self::CALC_AVG) {
                $queryType = 'avg(metric_points.value)';
            } else {
                $queryType = 'sum(metric_points.value)';
            }

            $query = DB::select("select {$queryType} as aggregate FROM metrics JOIN metric_points ON metric_points.metric_id = metrics.id WHERE metric_points.metric_id = {$this->id} AND to_char(metric_points.created_at, 'YYYYMMDDHH24') = :timestamp GROUP BY to_char(metric_points.created_at, 'H')", [
                'timestamp' => $hourInterval,
            ]);

            if (isset($query[0])) {
                $value = $query[0]->aggregate;
            } else {
                $value = 0;
            }
        }

        if ($value === 0 && $this->default_value != $value) {
            return $this->default_value;
        }

        return $value;
    }

    /**
     * Determines whether a chart should be shown.
     *
     * @return bool
     */
    public function getShouldDisplayAttribute()
    {
        return $this->display_chart === 1;
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return MetricPresenter::class;
    }
}
