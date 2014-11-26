<?php namespace CachetHq\Cachet\Repositories\Component;

interface ComponentRepository {

	public function all();

	public function findOrFail($id);

	public function incidents($id);
}
