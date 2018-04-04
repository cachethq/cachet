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
     * @param array      $metaData
     * @param string     $metaType
     * @param string|int $metaId
     * @param string     $metaModel
     *
     * @return void
     */
    public function storeMeta($metaData, $metaType, $metaId, $metaModel = Meta::class)
    {
        // Validation required instead of type hinting because it could be passed as false or NULL
        if (!is_array($metaData)) {
            return;
        }

        foreach ($metaData as $key => $value) {
            $modelInstance = call_user_func(
                [$metaModel, 'firstOrNew'],
                [
                    'key'       => $key,
                    'meta_type' => $metaType,
                    'meta_id'   => $metaId,
                ]
            );

            $value = $this->removeEmptyValues($value);
            if (!empty($value)) {
                $modelInstance->setAttribute('value', $value);
                $modelInstance->save();
                continue;
            }

            // The value is empty, remove the row
            if ($modelInstance->exists) {
                $modelInstance->delete();
            }
        }
    }

    /**
     * Determine if a Value is empty.
     *
     * @param mixed $values
     *
     * @return array|mixed
     */
    protected function removeEmptyValues($values)
    {
        if (!is_array($values)) {
            return empty($values) ? null : $values;
        }

        foreach ($values as $key => $value) {
            if (!empty($value)) {
                continue;
            }
            unset($values[$key]);
        }

        return $values;
    }
}
