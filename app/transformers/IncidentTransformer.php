<?php

class IncidentTransformer extends \League\Fractal\TransformerAbstract {
    public function transform(Incident $incident) {
        $component = $incident->parent;
        $transformer = $component->getTransformer();

        return [
            'id'            => (int) $incident->id,
            'name'          => $incident->name,
            'message'       => $incident->message,
            'status_id'     => (int) $incident->status,
            'status'        => $incident->getHumanStatusAttribute(),
            'component'     => $transformer->transform($component),
            'created_at'    => $incident->created_at->timestamp,
            'updated_at'    => $incident->updated_at->timestamp,
        ];
    }
}