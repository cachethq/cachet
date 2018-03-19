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
     *
     * @return void
     *
     * @throws \Exception
     */
    public function storeMeta($meta, $type, $id)
    {
        // Validation required instead of type hinting because it could be passed as false or NULL
        if (!is_array($meta)) {
            return;
        }

        foreach ($meta as $key => $value) {
            $meta = Meta::firstOrNew([
                'key'       => $key,
                'meta_type' => $type,
                'meta_id'   => $id,
            ]);

            if (!empty($value)) {
                $meta->value = $value;
                $meta->save();
                continue;
            }

            // The value is empty, remove the row
            if($meta->exists) {
                $meta->delete();
            }
        }
    }
}
