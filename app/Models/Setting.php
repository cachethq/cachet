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

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'value'];

    /**
     * List of attributes that have default values.
     *
     * @var string[]
     */
    protected $attributes = ['value' => ''];
}
