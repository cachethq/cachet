<?php

	class ComponentTransformer extends \League\Fractal\TransformerAbstract {
		public function transform(Component $component) {
			return [
				'id' => (int) $component->id,
				'name' => $component->name,
				'description' => $component->description,
				'status_id' => (int) $component->status,
				'status' => $component->getHumanStatusAttribute(),
				'incident_count' => $component->incidents()->count(),
				'created_at' => $component->created_at->timestamp,
				'updated_at' => $component->updated_at->timestamp,
			];
		}
	}
