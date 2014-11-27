<?php

namespace CachetHQ\Cachet\Transformers;

use Component;
use League\Fractal\TransformerAbstract;

class ComponentTransformer extends TransformerAbstract {

    public function transform(Component $component) {
        return [
            'id'                => (int) $component->id,
            'name'              => $component->name,
            'description'       => $component->description,
            'status_id'         => (int) $component->status,
            'status'            => $component->humanStatus,
            'incident_count'    => $component->incidents()->count(),
            'created_at'        => $component->created_at->timestamp,
            'updated_at'        => $component->updated_at->timestamp,
        ];
    }

}