<?php namespace CachetHq\Cachet\Repositories\Component;

use CachetHq\Cachet\Repositories\EloquentRepository;
use Component;
use Exception;

class EloquentComponentRepository extends EloquentRepository implements ComponentRepository {

	protected $model;

	public function __construct(Component $model) {
		$this->model = $model;
	}

	public function create($user_id, array $array) {
		$component = new $this->model($array);
		$component->user_id = $user_id;

		if ($component->isInvalid()) {
			throw new Exception('Invalid model validation', $component->getErrors());
		}

		$component->saveOrFail();
		return $component;
	}
}
