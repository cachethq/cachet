<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joe@cachethq.io>
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Watson\Validating\ValidatingTrait;

/**
 * @property int            $id
 * @property string         $email
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 */
class Subscriber extends Model
{
    use SoftDeletes, ValidatingTrait;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    protected $rules = [
        'email' => 'required|email',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['email'];
}
