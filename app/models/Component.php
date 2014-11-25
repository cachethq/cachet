<?php

	use Watson\Validating\ValidatingTrait;

	class Component extends Eloquent implements \Dingo\Api\Transformer\TransformableInterface {
		use ValidatingTrait;

		protected $rules = [
			'user_id' => 'required|integer',
			'name'    => 'required',
			'status'  => 'required|integer'
		];

		protected $fillable = ['name', 'description', 'status'];

		/**
		 * Lookup all of the incidents reported on the component.
		 * @return Illuminate\Database\Eloquent\Relations
		 */
		public function incidents() {
			return $this->hasMany('Incident', 'component', 'id');
		}

		/**
		 * Looks up the human readable version of the status.
		 * @return string
		 */
		public function getHumanStatusAttribute() {
			return Lang::get('component.status.' . $this->status);
		}

		/**
		 * Get the transformer instance.
		 *
		 * @return ComponentTransformer
		 */
		public function getTransformer() {
			return new ComponentTransformer();
		}
	}
