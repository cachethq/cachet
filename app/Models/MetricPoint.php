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
use CachetHQ\Cachet\Presenters\MetricPointPresenter;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;

/**
 * This is the metric point model class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class MetricPoint extends Model implements HasPresenter
{
    use ValidatingTrait;

    /**
     * The accessors to append to the model's array form.
     *
     * @var string[]
     */
    protected $appends = [
        'calculated_value',
    ];

    /**
     * The model's attributes.
     *
     * @var string[]
     */
    protected $attributes = [
        'value'   => 0,
        'counter' => 1,
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'metric_id' => 'int',
        'value'     => 'float',
        'counter'   => 'int',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'metric_id',
        'value',
        'counter',
        'created_at',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'value' => 'required|numeric',
    ];

    /**
     * Get the metric relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function metric()
    {
        return $this->belongsTo(Metric::class);
    }

    /**
     * Show the actual calculated value; as per (value * counter).
     *
     * @return int
     */
    public function getCalculatedValueAttribute()
    {
        return $this->value * $this->counter;
    }

    /**
     * Round the created at value into intervals of 30 seconds.
     *
     * @param string $createdAt
     *
     * @return string|void
     */
    public function setCreatedAtAttribute($createdAt)
    {
        if (!$createdAt) {
            return;
        }

        if (!$createdAt instanceof DateTime) {
            $createdAt = Carbon::parse($createdAt);
        }

        $timestamp = $createdAt->format('U');
        $timestamp = 30 * round($timestamp / 30);

        $date = Carbon::createFromFormat('U', $timestamp)->toDateTimeString();

        $this->attributes['created_at'] = $date;

        return $date;
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return MetricPointPresenter::class;
    }
}
