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
use CachetHQ\Cachet\Presenters\IncidentPresenter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;

class Incident extends Model implements HasPresenter
{
    use SearchableTrait, SoftDeletes, SortableTrait, ValidatingTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'visible'      => 'int',
        'scheduled_at' => 'date',
        'deleted_at'   => 'date',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'component_id',
        'name',
        'status',
        'visible',
        'message',
        'scheduled_at',
        'created_at',
        'updated_at',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'component_id' => 'int',
        'name'         => 'required',
        'status'       => 'required|int',
        'visible'      => 'required|bool',
        'message'      => 'required',
    ];

    /**
     * The searchable fields.
     *
     * @var string[]
     */
    protected $searchable = [
        'id',
        'component_id',
        'name',
        'status',
        'visible',
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
        'visible',
        'message',
    ];

    /**
     * Finds all visible incidents.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVisible(Builder $query)
    {
        return $query->where('visible', 1);
    }

    /**
     * Finds all scheduled incidents (maintenance).
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeScheduled(Builder $query)
    {
        return $query->where('status', 0)->where('scheduled_at', '>=', Carbon::now()->toDateTimeString());
    }

    /**
     * Finds all non-scheduled incidents.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNotScheduled(Builder $query)
    {
        return $query->where('status', '>', 0)->orWhere(function ($query) {
            $query->where('status', 0)->where(function ($query) {
                $query->whereNull('scheduled_at')->orWhere('scheduled_at', '<=', Carbon::now()->toDateTimeString());
            });
        });
    }

    /**
     * An incident belongs to a component.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function component()
    {
        return $this->belongsTo(Component::class, 'component_id', 'id');
    }

    /**
     * Returns whether the "incident" is scheduled or not.
     *
     * @return bool
     */
    public function getIsScheduledAttribute()
    {
        return $this->getOriginal('scheduled_at') !== null;
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return IncidentPresenter::class;
    }
}
