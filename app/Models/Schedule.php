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
use CachetHQ\Cachet\Models\Traits\SearchableTrait;
use CachetHQ\Cachet\Models\Traits\SortableTrait;
use CachetHQ\Cachet\Presenters\SchedulePresenter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;

/**
 * This is the schedule class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class Schedule extends Model implements HasPresenter
{
    use SearchableTrait, SortableTrait, ValidatingTrait;

    /**
     * The upcoming status.
     *
     * @var int
     */
    const UPCOMING = 0;

    /**
     * The in progress status.
     *
     * @var int
     */
    const IN_PROGRESS = 1;

    /**
     * The complete status.
     *
     * @var int
     */
    const COMPLETE = 2;

    /**
     * The model's attributes.
     *
     * @var string[]
     */
    protected $attributes = [
        'status'       => self::UPCOMING,
        'completed_at' => null,
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'name'         => 'string',
        'message'      => 'string',
        'status'       => 'int',
        'scheduled_at' => 'date',
        'completed_at' => 'date',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'message',
        'status',
        'scheduled_at',
        'completed_at',
        'created_at',
        'updated_at',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'         => 'required|string',
        'message'      => 'nullable|string',
        'status'       => 'required|int|between:0,2',
    ];

    /**
     * The searchable fields.
     *
     * @var string[]
     */
    protected $searchable = [
        'id',
        'name',
        'status',
    ];

    /**
     * The sortable fields.
     *
     * @var string[]
     */
    protected $sortable = [
        'id',
        'name',
        'status',
        'scheduled_at',
        'completed_at',
        'created_at',
        'updated_at',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var string[]
     */
    protected $with = ['components'];

    /**
     * Scopes schedules to those in the future.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFutureSchedules($query)
    {
        return $query->whereIn('status', [self::UPCOMING, self::IN_PROGRESS])->where('scheduled_at', '>=', Carbon::now());
    }

    /**
     * Scopes schedules to those in the past.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePastSchedules($query)
    {
        return $query->where('status', '<', self::COMPLETE)->where('scheduled_at', '<=', Carbon::now());
    }

    /**
     * Get the components relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function components()
    {
        return $this->hasMany(ScheduleComponent::class);
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return SchedulePresenter::class;
    }
}
