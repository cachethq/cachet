<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;
use Watson\Validating\ValidatingTrait;

class Incident extends Model implements HasPresenter
{
    use SoftDeletes, ValidatingTrait;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    protected $rules = [
        'component_id' => 'integer',
        'name'         => 'required',
        'status'       => 'required|integer',
        'visible'      => 'required|boolean',
        'message'      => 'required',
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
     * The accessors to append to the model's serialized form.
     *
     * @var string[]
     */
    protected $appends = ['human_status'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var string[]
     */
    protected $dates = ['scheduled_at', 'deleted_at'];

    /**
     * Finds all visible incidents.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVisible($query)
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
    public function scopeScheduled($query)
    {
        return $query->where('status', 0)->where('scheduled_at', '>=', Carbon::now());
    }

    /**
     * Finds all non-scheduled incidents.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNotScheduled($query)
    {
        return $query->where(function ($query) {
            return $query->whereNull('scheduled_at')->orWhere('scheduled_at', '<=', Carbon::now());
        });
    }

    /**
     * An incident belongs to a component.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function component()
    {
        return $this->belongsTo('CachetHQ\Cachet\Models\Component', 'component_id', 'id');
    }

    /**
     * Returns a human readable version of the status.
     *
     * @return string
     */
    public function getHumanStatusAttribute()
    {
        $statuses = trans('cachet.incidents.status');

        return $statuses[$this->status];
    }

    /**
     * Returns whether the "incident" is scheduled or not.
     *
     * @return bool
     */
    public function getIsScheduledAttribute()
    {
        return $this->getOriginal('scheduled_at');
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return 'CachetHQ\Cachet\Presenters\IncidentPresenter';
    }
}
