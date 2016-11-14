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
use CachetHQ\Cachet\Models\Traits\SortableTrait;
use CachetHQ\Cachet\Presenters\MetricPresenter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;

class Metric extends Model implements HasPresenter
{
    use SortableTrait, ValidatingTrait;

    /**
     * The calculation type of sum.
     *
     * @var int
     */
    const CALC_SUM = 0;

    /**
     * The calculation type of average.
     *
     * @var int
     */
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
        'places'        => 2,
        'default_view'  => 1,
        'threshold'     => 5,
        'order'         => 0,
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'name'          => 'string',
        'display_chart' => 'bool',
        'default_value' => 'int',
        'calc_type'     => 'int',
        'places'        => 'int',
        'default_view'  => 'int',
        'threshold'     => 'int',
        'order'         => 'int',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'suffix',
        'description',
        'display_chart',
        'default_value',
        'calc_type',
        'places',
        'default_view',
        'threshold',
        'order',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'          => 'required',
        'suffix'        => 'required',
        'display_chart' => 'required|bool',
        'default_value' => 'required|numeric',
        'places'        => 'required|numeric|between:0,4',
        'default_view'  => 'required|numeric|between:0,3',
        'threshold'     => 'required|numeric|between:0,10',
    ];

    /**
     * The sortable fields.
     *
     * @var string[]
     */
    protected $sortable = [
        'id',
        'name',
        'display_chart',
        'default_value',
        'calc_type',
        'order',
    ];

    /**
     * Get the points relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function points()
    {
        return $this->hasMany(MetricPoint::class, 'metric_id', 'id');
    }

    /**
     * Scope metrics to those of which are displayable.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDisplayable(Builder $query)
    {
        return $query->where('display_chart', '=', true);
    }

    /**
     * Determines whether a chart should be shown.
     *
     * @return bool
     */
    public function getShouldDisplayAttribute()
    {
        return $this->display_chart;
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
