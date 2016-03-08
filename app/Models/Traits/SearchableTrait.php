<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

/**
 * This is the searchable trait.
 *
 * @author James Brooks <james@alt-three.com>
 */
trait SearchableTrait
{
    /**
     * Adds a sort scope.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array                                 $column
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch(Builder $query, array $search = [])
    {
        if (empty($search)) {
            return $query;
        }

        if (!array_intersect(array_keys($search), $this->searchable)) {
            return $query;
        }

        return $query->where($search);
    }
}
