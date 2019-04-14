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

use CachetHQ\Cachet\Models\Meta;

/**
 * This is the has meta trait.
 *
 * @author James Brooks <james@alt-three.com>
 */
trait HasMeta
{
    /**
     * Get the meta relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function meta()
    {
        return $this->morphMany(Meta::class, 'meta');
    }
}
