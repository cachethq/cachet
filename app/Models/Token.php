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

class Token extends Model
{
    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'name'   => 'string',
        'token'  => 'string',
        'active' => 'boolean',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'token',
        'active',
    ];

    /**
     * Finds all active tokens.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive(Builder $query)
    {
        return $query->where('active', 1);
    }
}
