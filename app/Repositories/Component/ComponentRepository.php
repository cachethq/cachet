<?php

namespace CachetHQ\Cachet\Repositories\Component;

interface ComponentRepository
{
    /**
     * Returns all models.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all();

    /**
     * Create a new model.
     *
     * @param int   $userId
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create($userId, array $data);

    /**
     * Update a model by id.
     *
     * @param int   $id
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($id, array $data);

    /**
     * Finds a model by id.
     *
     * @param int $id
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findOrFail($id);

    /**
     * Returns an object with related relationships.
     *
     * @param int      $id
     * @param string[] $with
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function with($id, array $with = []);
}
