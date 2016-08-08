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
use CachetHQ\Cachet\Models\Traits\SearchableTrait;
use CachetHQ\Cachet\Models\Traits\SortableTrait;
use CachetHQ\Cachet\Presenters\TimedActionPresenter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;

/**
 * This is the timed action model.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TimedAction extends Model implements HasPresenter
{
    use SearchableTrait, SoftDeletes, SortableTrait, ValidatingTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'id'                    => 'int',
        'name'                  => 'string',
        'description'           => 'string',
        'active'                => 'bool',
        'visible'               => 'bool',
        'start_at'              => 'date',
        'timezone'              => 'string',
        'window_length'         => 'int',
        'completion_latency'    => 'int',
        'timed_action_group_id' => 'int',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'timed_action_group_id',
        'description',
        'active',
        'visible',
        'start_at',
        'timezone',
        'window_length',
        'completion_latency',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'                  => 'string|required',
        'timed_action_group_id' => 'int',
        'description'           => 'string',
        'active'                => 'bool',
        'visible'               => 'bool',
        'timezone'              => 'string|required',
        'window_length'         => 'int|required',
        'completion_latency'    => 'int|required',
    ];

    /**
     * The searchable fields.
     *
     * @var string[]
     */
    protected $searchable = [
        'name',
        'timed_action_group_id',
        'description',
        'active',
        'visible',
        'start_at',
        'timezone',
        'window_length',
        'completion_latency',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The sortable fields.
     *
     * @var string[]
     */
    protected $sortable = [
        'id',
        'name',
        'timed_action_group_id',
        'description',
        'active',
        'visible',
        'start_at',
        'timezone',
        'window_length',
        'completion_latency',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Get the instances relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function instances()
    {
        return $this->hasMany(TimedActionInstance::class)->orderBy('started_at', 'desc');
    }

    /**
     * Get the group relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(TimedActionGroup::class, 'timed_action_group_id', 'id');
    }

    /**
     * Scope timed actions to active.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive(Builder $query)
    {
        return $query->where('active', true);
    }

    /**
     * Scope timed actions to inactive.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInactive(Builder $query)
    {
        return $query->where('active', false);
    }

    /**
     * Scope timed actions to started.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStarted(Builder $query)
    {
        return $query->where('start_at', '<', Carbon::now());
    }

    /**
     * Validate the model.
     *
     * @throws \AltThree\Validator\ValidationException
     *
     * @return void
     */
    public function validate()
    {
        if ($this->window_length < 120) {
            throw new ValidationException('The window length must be at least 120 seconds.');
        }

        if ($this->completion_latency > $this->window_length) {
            throw new ValidationException('The completion latency must equal to or less than the window length.');
        }
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return TimedActionPresenter::class;
    }
}
