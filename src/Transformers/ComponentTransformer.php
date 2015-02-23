<?php

namespace CachetHQ\Cachet\Transformers;

use CachetHQ\Cachet\Models\Component;
use League\Fractal\TransformerAbstract;

class ComponentTransformer extends TransformerAbstract
{
    /**
     * List of resources possible to include.
     *
     * @var array
     */
    protected $availableIncludes = [
        'incidents',
        'tags',
    ];

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

    /**
     * Include component incidents.
     *
     * @return League\Fractal\Resource\Collection
     */
    public function includeIncidents(Component $component)
    {
        $incidents = $component->incidents;

        return $this->collection($incidents, new IncidentTransformer());
    }

    /**
     * Include components tags.
     *
     * @return League\Fractal\Resource\Collection
     */
    public function includeTags(Component $component)
    {
        $incidents = $component->tags;

        return $this->collection($incidents, new TagTransformer());
    }
}
