<?php

namespace CachetHQ\Cachet\Transformers;

use CachetHQ\Cachet\Models\Component;
use League\Fractal\TransformerAbstract;

class ComponentTransformer extends TransformerAbstract
{
    /**
     * Transform a component model into an array.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return array
     */
    public function transform(Component $component)
    {
        return [
            'id'             => (int) $component->id,
            'name'           => $component->name,
            'description'    => $component->description,
            'status_id'      => (int) $component->status,
            'status'         => $component->humanStatus,
            'incident_count' => $component->incidents()->count(),
            'created_at'     => $component->created_at->timestamp,
            'updated_at'     => $component->updated_at->timestamp,
        ];
    }
}
