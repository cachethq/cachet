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
use AltThree\Validator\ValidationException;
use CachetHQ\Cachet\Models\Traits\SortableTrait;
use CachetHQ\Cachet\Presenters\MetricPresenter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\MessageBag;
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
     * Viewable only authenticated users.
     *
     * @var int
     */
    const VISIBLE_AUTHENTICATED = 0;

    /**
     * Viewable by public.
     *
     * @var int
     */
    const VISIBLE_GUEST = 1;

    /**
     * Viewable by nobody.
     *
     * @var int
     */
    const VISIBLE_HIDDEN = 2;

    /**
     * Array of acceptable threshold minutes.
     *
     * @var int[]
     */
    const ACCEPTABLE_THRESHOLDS = [1, 2, 3, 4, 5, 6, 10, 12, 15, 20, 30, 60];

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
        'visible'       => 1,
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
        'visible'       => 'int',
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
        'visible',
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
        'visible'       => 'required|numeric|between:0,2',
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
        'visible',
    ];

    /**
     * Overrides the models boot method.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        // When deleting a metric, delete the points too.
        self::deleting(function ($model) {
            $model->points()->delete();
        });
    }

    /**
     * Get all of the meta relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function meta()
    {
        return $this->morphMany(Meta::class, 'meta');
    }

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
        return $query->where('display_chart', '=', true)->where('visible', '!=', self::VISIBLE_HIDDEN);
    }

    /**
     * Finds all metrics which are visible to public.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVisible(Builder $query)
    {
        return $query->where('visible', '=', self::VISIBLE_GUEST);
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
     * Validate the model before save.
     *
     * @throws \AltThree\Validator\ValidationException
     *
     * @return void
     */
    public function validate()
    {
        $messages = [];

        if (60 % $this->threshold !== 0) {
            $messages[] = 'Threshold must divide by 60.';
        }

        if ($messages) {
            throw new ValidationException(new MessageBag($messages));
        }
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
