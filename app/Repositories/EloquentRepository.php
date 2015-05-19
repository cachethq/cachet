<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class EloquentRepository
{
    /**
     * Returns all models.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Returns paginated result.
     *
     * @param int $perPage
     *
     * @return \Illuminate\Pagination\Paginator
     */
    public function paginate($perPage = 20)
    {
        return $this->model->paginate($perPage);
    }

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
    public function with($id, array $with = [])
    {
        return $this->model->with($with)->findOrFail($id);
    }

    /**
     * Sets the model to query against a user id.
     *
     * @param int    $id
     * @param string $column
     *
     * @return $this
     */
    public function withAuth($id, $column = 'user_id')
    {
        $this->model = $this->model->where($column, $id);

        return $this;
    }

    /**
     * Finds a model by ID.
     *
     * @param int $id
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Finds a model by id.
     *
     * @param int $id
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Finds a model by type.
     *
     * @param string $key
     * @param string $value
     * @param array  $columns
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findByOrFail($key, $value, $columns = ['*'])
    {
        $model = $this->model->where($key, $value)->first($columns);

        if ($model === null) {
            throw new ModelNotFoundException();
        }

        return $model;
    }

    /**
     * Counts the number of rows returned.
     *
     * @param string|null $key
     * @param string|null $value
     *
     * @return int
     */
    public function count($key = null, $value = null)
    {
        if ($key === null || $value === null) {
            return $this->model->count();
        }

        return $this->model->where($key, $value)->count();
    }

    /**
     * Deletes a model by id.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $this->model->destroy($id);
    }

    /**
     * Validate a given model with Watson validation.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     *
     * @throws \CachetHQ\Cachet\Repositories\InvalidModelValidationException
     *
     * @return $this
     */
    public function validate(Model $model)
    {
        if ($model->isInvalid()) {
            throw new InvalidModelValidationException('Validation failed on the model.');
        }

        return $this;
    }

    /**
     * Validate whether a model has a correct relationship.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string                              $relationship
     *
     * @throws \CachetHQ\Cachet\Repositories\InvalidRelationshipException
     *
     * @return $this
     */
    public function hasRelationship(Model $model, $relationship)
    {
        if ($model->$relationship === null) {
            throw new InvalidRelationshipException('The relationship was not valid.');
        }

        return $this;
    }
}
