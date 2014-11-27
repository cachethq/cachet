<?php

	namespace CachetHQ\Cachet\Repositories;

	use Illuminate\Database\Eloquent\ModelNotFoundException;
	use Exception;

	abstract class EloquentRepository {

		/**
		 * Returns all models
		 * @return object
		 */
		public function all() {
			return $this->model->all();
		}

		/**
		 * Returns an object with related relationships
		 * @param  id $id
		 * @param  array $with Array of model relationships
		 * @return object|ModelNotFoundException
		 */
		public function with($id, array $with = []) {
			return $this->model->with($with)->findOrFail($id);
		}

		/**
		 * Sets the model to query against a user id
		 * @param  integer $id
		 * @param  string $column
		 * @return $this
		 */
		public function withAuth($id, $column = 'user_id') {
			$this->model = $this->model->where($column, $id);
			return $this;
		}

		/**
		 * Finds a model by ID
		 * @param  int    $id
		 * @return object
		 */
		public function find(int $id) {
			return $this->model->find($id);
		}

		/**
		 * Finds a model by ID
		 * @param  integer $id
		 * @return object|ModelNotFoundException
		 */
		public function findOrFail($id) {
			return $this->model->findOrFail($id);
		}

		/**
		 * Finds a model by type
		 * @param  string $key
		 * @param  string $value
		 * @param  array $columns
		 * @return object|ModelNotFoundException
		 */
		public function findByOrFail($key, $value, $columns = ['*']) {
			if (! is_null($item = $this->model->where($key, $value)->first($columns))) {
				return $item;
			}

			throw new ModelNotFoundException;
		}

		/**
		 * Counts the number of rows returned
		 * @param  string $key
		 * @param  string $value
		 * @return integer
		 */
		public function count($key = null, $value = null) {
			if (is_null($key) || is_null($value)) {
				return $this->model->where($key, $value)->count();
			}

			return $this->model->count();
		}

		/**
		 * Deletes a model by ID
		 * @param  inetegr $id
		 */
		public function destroy($id) {
			$this->model->delete($id);
		}

		/**
		 * Updates a given model by ID with an array of updates
		 * @param  inetegr $id
		 * @param  array  $array Key Value pairs to update
		 */
		public function update($id, array $array) {
			$model = $this->model->whereId($id)->first(['id']);
			$model->update($array);
		}

		/**
		 * Validate a given model with Watson validation
		 * @param  object $model
		 * @return Exception
		 */
		public function validate($model) {
			if ($model->isInvalid()) {
				throw new Exception('Invalid model validation');
			}
		}
	}
