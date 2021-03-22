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
 * This is the action model class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class Action extends Model
{
    use ValidatingTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'id'          => 'int',
        'class_name'  => 'string',
        'user_id'     => 'int',
        'username'    => 'string',
        'information' => 'string',
        'description' => 'string',
    ];

    /**
     * A list of methods protected from mass assignment.
     *
     * @var string[]
     */
    protected $guarded = ['_token', '_method'];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'id'          => 'nullable|int|min:1',
        'class_name'  => 'required|string',
        'user_id'     => 'required|int|min:1',
        'username'    => 'required|string',
        'information' => 'nullable|string',
        'description' => 'required|string',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var string[]
     */
    protected $with = ['user'];

    /**
     * Get the user relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
