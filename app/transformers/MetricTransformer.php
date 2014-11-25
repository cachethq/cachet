<?php

	class MetricTransformer extends \League\Fractal\TransformerAbstract {
		public function transform(Metric $metric) {
			return [
				'id' => (int) $component->id,
				'name' => $component->name,
				'description' => $component->description,
				'suffix' => $component->suffix,
				'display' => $component->shouldDisplay,
				'created_at' => $component->created_at->timestamp,
				'updated_at' => $component->updated_at->timestamp,
			];
		}
	}
