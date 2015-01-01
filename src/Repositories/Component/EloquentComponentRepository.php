<?php

namespace CachetHQ\Cachet\Repositories\Component;

use CachetHQ\Cachet\Repositories\EloquentRepository;
use Component;

class EloquentComponentRepository extends EloquentRepository implements ComponentRepository
{
    protected $model;

    public function __construct(Component $model)
    {
        $this->model = $model;
    }

    public function create($user_id, array $array)
    {
        $component = new $this->model($array);
        $component->user_id = $user_id;

        $this->validate($component);

        $component->saveOrFail();

        return $component;
    }
}
