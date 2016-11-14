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
use Illuminate\Database\Eloquent\Model;

class ScheduleComponent extends Model
{
    use ValidatingTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'schedule_id'      => 'int',
        'component_id'     => 'int',
        'component_status' => 'int',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'schedule_id',
        'component_id',
        'component_status',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'schedule_id'      => 'required|int',
        'component_id'     => 'required|int',
        'component_status' => 'required|int',
    ];

    /**
     * Get the schedule relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    /**
     * Get the component relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function component()
    {
        return $this->hasOne(Component::class);
    }
}
