<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Traits;

use CachetHQ\Cachet\Models\Meta;

trait StoresMeta
{
    /**
     * Stores all Meta values of a model.
     *
     * @param $meta
     * @param $type
     * @param $id
     */
    public function storeMeta($meta, $type, $id)
    {
        // Validation required instead of type hinting because it could be passed as false or NULL
        if (!is_array($meta)) {
            return;
        }

        foreach ($meta as $key => $value) {
            if (empty($value)) {
                continue;
            }

            $meta = Meta::firstOrNew([
                'key'       => $key,
                'meta_type' => $type,
                'meta_id'   => $id,
            ]);

            $meta->value = $value;

            $meta->save();
        }
    }
}
