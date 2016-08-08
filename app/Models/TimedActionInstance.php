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
use CachetHQ\Cachet\Actions\Window;
use CachetHQ\Cachet\Models\Traits\SearchableTrait;
use CachetHQ\Cachet\Models\Traits\SortableTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * This is the timed action instance model.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TimedActionInstance extends Model
{
    use SearchableTrait, SortableTrait, ValidatingTrait;

    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = [
        'message'      => null,
        'completed_at' => null,
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'timed_action_id' => 'int',
        'message'         => 'string',
        'started_at'      => 'date',
        'completed_at'    => 'date',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'timed_action_id',
        'message',
        'started_at',
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
        'timed_action_id' => 'required|int',
        'started_at'      => 'required|date',
        'completed_at'    => 'date',
    ];

    /**
     * The searchable fields.
     *
     * @var string[]
     */
    protected $searchable = [
        'id',
        'started_at',
        'completed_at',
    ];

    /**
     * The sortable fields.
     *
     * @var string[]
     */
    protected $sortable = [
        'id',
        'timed_action_id',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the action relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function action()
    {
        return $this->belongsTo(TimedAction::class);
    }

    /**
     * Scope instances to those within the given window.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param \CachetHQ\Cachet\Actions\Window       $window
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWindow(Builder $query, Window $window)
    {
        return $query->where('created_at', '>=', $window->start())->where('created_at', '=<', $window->end());
    }

    /**
     * Scope instances to those after the given window.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param \CachetHQ\Cachet\Actions\Window       $window
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAfterWindow(Builder $query, Window $window)
    {
        return $query->where('created_at', '>=', $window->start());
    }

    /**
     * Was the instance submitted late?
     *
     * @return bool
     */
    public function getIsLateAttribute()
    {
        $diff = $this->started_at->addSeconds($this->action->completion_latency);

        return $this->completed_at->gt($diff);
    }

    /**
     * Was the instance completed?
     *
     * @return bool
     */
    public function getIsCompletedAttribute()
    {
        return $this->completed_at !== null;
    }
}
