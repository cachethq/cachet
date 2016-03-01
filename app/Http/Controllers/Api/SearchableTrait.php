<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Builder;

/**
 * This is the searchable trait.
 *
 * @author James Brooks <james@alt-three.com>
 */
trait SearchableTrait
{
    /**
     * Adds clauses to an eloquent builder.
     *
     * @param \Illuminate\Database\Eloquent\Builder $model
     * @param array                                 $search
     *
     * @return mixed
     */
    public function search(Builder $model, array $search = [])
    {
        return $model->where($search);
    }
}
