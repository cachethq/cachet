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

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * This is the status class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class Status extends Model
{
    /**
     * The incidents type.
     *
     * @var string
     */
    const TYPE_INCIDENTS = 'incidents';

    /**
     * The components type.
     *
     * @var string
     */
    const TYPE_COMPONENTS = 'components';

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'name'  => 'string',
        'slug'  => 'string',
        'color' => 'string',
        'type'  => 'string',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'slug',
        'color',
        'type',
    ];

    /**
     * Scope the statuses by type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string                                $type
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeForType(Builder $query, $type)
    {
        return $query->where('type', '=', $type);
    }
}
