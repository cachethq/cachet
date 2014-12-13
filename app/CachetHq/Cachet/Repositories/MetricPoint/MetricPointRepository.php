<?php

namespace CachetHQ\Cachet\Repositories\MetricPoint;

interface MetricPointRepository {

	public function all();

	public function create(array $array);

	public function findOrFail($id);

	public function update($id, array $with);
}
