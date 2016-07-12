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

/**
 * This is the timed action model.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TimedAction extends Model
{
    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'name'               => 'string',
        'description'        => 'string',
        'active'             => 'bool',
        'timezone'           => 'string',
        'schedule_frequency' => 'int',
        'completion_latency' => 'int',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'active',
        'timezone',
        'schedule_frequency',
        'completion_latency',
        'created_at',
        'updated_at',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'               => 'string|required',
        'description'        => 'string',
        'active'             => 'bool',
        'timezone'           => 'string',
        'schedule_frequency' => 'int',
        'completion_latency' => 'int',
    ];
}
