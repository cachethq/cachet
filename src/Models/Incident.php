<?php

namespace CachetHQ\Cachet\Models;

use Carbon\Carbon;
use CachetHQ\Cachet\Transformers\IncidentTransformer;
use Dingo\Api\Transformer\TransformableInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Jenssegers\Date\Date;
use McCool\LaravelAutoPresenter\PresenterInterface;
use Watson\Validating\ValidatingTrait;

/**
 * @property int            $id
 * @property int            $component_id
 * @property int            $user_id
 * @property string         $name
 * @property int            $status
 * @property string         $message
 * @property string         $humanStatus
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 */
class Incident extends Model implements TransformableInterface, PresenterInterface
{
    use SoftDeletingTrait, ValidatingTrait;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    protected $rules = [
        'user_id'      => 'required|integer',
        'component_id' => 'integer',
        'name'         => 'required',
        'status'       => 'required|integer',
        'message'      => 'required',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['user_id', 'component_id', 'name', 'status', 'message', 'scheduled_at'];

    /**
     * The accessors to append to the model's serialized form.
     *
     * @var string[]
     */
    protected $appends = ['humanStatus'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var string[]
     */
    protected $dates = ['scheduled_at', 'deleted_at'];

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
     * Get presenter class.
     *
     * @return string
     */
    public function getPresenter()
    {
        return 'CachetHQ\Cachet\Presenters\IncidentPresenter';
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
     * Get the transformer instance.
     *
     * @return \CachetHQ\Cachet\Transformers\IncidentTransformer
     */
    public function getTransformer()
    {
        return new IncidentTransformer();
    }
}
