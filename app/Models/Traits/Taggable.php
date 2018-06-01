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

use CachetHQ\Cachet\Models\Taggable as TaggableModel;

/**
 * This is the taggable trait.
 *
 * @author James Brooks <james@alt-three.com>
 */
trait Taggable
{
    /**
     * Get the tags relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function tags()
    {
        return $this->morphMany(TaggableModel::class, 'taggable');
    }
}
