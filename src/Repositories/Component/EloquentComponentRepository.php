<?php

namespace CachetHQ\Cachet\Repositories\Component;

use CachetHQ\Cachet\Repositories\EloquentRepository;
use Component;

class EloquentComponentRepository extends EloquentRepository implements ComponentRepository
{
    /**
     * The eloquent model instance.
     *
     * @var \Component
     */
    protected $model;

    /**
     * Create a new eloquent component repository instance.
     *
     * @param \Component $model
     *
     * @return void
     */
    public function __construct(Component $model)
    {
        $this->model = $model;
    }

    /**
     * Create a new model.
     *
     * @param int   $userId
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create($userId, array $data)
    {
        $component = new $this->model($data);
        $component->user_id = $userId;

        $this->validate($component);

        $component->saveOrFail();

        return $component;
    }
}
