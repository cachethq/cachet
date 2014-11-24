<?php

class ComponentTransformer extends League\Fractal\TransformerAbstract {

	public function transform(Component $component)
	{
		return [
			'id' => (int) $component->id,
			'name' => $component->name,
			'description' => $component->description,
			'status_id' => (int) $component->status,
			'status' => $component->getHumanStatusAttribute(),
		];
	}

}
