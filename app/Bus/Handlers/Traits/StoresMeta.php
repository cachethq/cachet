<?php

namespace CachetHQ\Cachet\Bus\Handlers\Traits;

use CachetHQ\Cachet\Models\Meta;

trait StoresMeta
{
    /**
     * Stores all Meta values of a model
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
                'key' => $key,
                'meta_type' => $type,
                'meta_id' => $id,
            ]);

            $meta->value = $value;

            $meta->save();
        }

    }
}