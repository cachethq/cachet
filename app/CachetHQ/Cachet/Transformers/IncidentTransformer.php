<?php

namespace CachetHQ\Cachet\Transformers;

use Incident;
use League\Fractal\TransformerAbstract;

class IncidentTransformer extends TransformerAbstract
{
    public function transform(Incident $incident)
    {
        $component = $incident->component;
        if ($component) {
            $transformer = $component->getTransformer();
        }

        return [
            'id'         => (int) $incident->id,
            'name'       => $incident->name,
            'message'    => $incident->message,
            'status_id'  => (int) $incident->status,
            'status'     => $incident->humanStatus,
            'component'  => isset($transformer) ? $transformer->transform($component) : null,
            'created_at' => $incident->created_at->timestamp,
            'updated_at' => $incident->updated_at->timestamp,
        ];
    }
}
