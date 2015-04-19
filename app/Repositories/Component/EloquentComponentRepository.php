<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Repositories\Component;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Repositories\EloquentRepository;

class EloquentComponentRepository extends EloquentRepository implements ComponentRepository
{
    /**
     * The eloquent model instance.
     *
     * @var \CachetHQ\Cachet\Models\Component
     */
    protected $model;

    /**
     * Create a new eloquent component repository instance.
     *
     * @param \CachetHQ\Cachet\Models\Component $model
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

    /**
     * Update a model by id.
     *
     * @param int   $id
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($id, array $data)
    {
        $component = $this->model->findOrFail($id);
        $component->fill($data);
        $this->validate($component);

        $component->update($data);

        return $component;
    }
}
