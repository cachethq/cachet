<?php

namespace CachetHQ\Cachet\Repositories\Component;

interface ComponentRepository
{

    public function all();

    public function create($id, array $array);

    public function findOrFail($id);

    public function with($id, array $with);
}
