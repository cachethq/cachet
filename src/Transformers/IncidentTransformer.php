<?php

namespace CachetHQ\Cachet\Transformers;

use CachetHQ\Cachet\Models\Incident;
use League\Fractal\TransformerAbstract;

class IncidentTransformer extends TransformerAbstract
{
    /**
     * Transform an incident model into an array.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return array
     */
    public function transform(Incident $incident)
    {
        $component = $incident->component;

        if ($component) {
            $transformer = $component->getTransformer();
        }

        return [
            'id'           => (int) $incident->id,
            'name'         => $incident->name,
            'message'      => $incident->message,
            'status'       => (int) $incident->status,
            'human_status' => $incident->humanStatus,
            'component'    => isset($transformer) ? $transformer->transform($component) : null,
            'created_at'   => $incident->created_at->timestamp,
            'updated_at'   => $incident->updated_at->timestamp,
        ];
    }
}
