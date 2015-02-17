<?php

namespace CachetHQ\Cachet\Repositories\Incident;

interface IncidentRepository
{
    /**
     * Returns all models.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all();

    /**
     * Returns paginated result.
     *
     * @param int $perPage
     *
     * @return \Illuminate\Pagination\Paginator
     */
    public function paginate($perPage = 20);

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
     * Update a model by id.
     *
     * @param int   $id
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($id, array $data);
}
