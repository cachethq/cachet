<?php namespace Cachet\Repositories\Component;

interface ComponentRepository {

	public function all();

	public function findOrFail($id);

	public function incidents($id);
}
