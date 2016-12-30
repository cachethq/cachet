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
 * This is the timed action response model.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TimedActionResponse extends Model
{
    use ValidatingTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'timed_action_id' => 'int',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'timed_action_id',
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
    ];

    /**
     * Get the timed action relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function timed_action()
    {
        return $this->belongsTo(TimedAction::class);
    }
}
