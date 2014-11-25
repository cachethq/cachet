<?php

	use Watson\Validating\ValidatingTrait;

	class Incident extends Eloquent implements Dingo\Api\Transformer\TransformableInterface {
		use ValidatingTrait;
		use \Illuminate\Database\Eloquent\SoftDeletingTrait;

		protected $rules = [
			'component'   => 'required|integer',
			'name'   => 'required',
			'status' => 'required|integer',
			'message' => 'required',
		];

		protected $fillable = ['component', 'name', 'status', 'message'];

		/**
		 * An incident belongs to a component.
		 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
		 */
		public function parent() {
			return $this->belongsTo('Component', 'component', 'id');
		}

		/**
		 * Returns a human readable version of the status.
		 * @return string
		 */
		public function getHumanStatusAttribute() {
			return Lang::get('incident.status' . $this->status);
		}

		/**
		 * Finds the icon to use for each status.
		 * @return string
		 */
		public function getIconAttribute() {
			switch ($this->status) {
				case 1: return 'glyphicon-flag';
				case 2: return 'glyphicon-warning-sign';
				case 3: return 'glyphicon-eye-open';
				case 4: return 'glyphicon-ok';
			}
		}

		/**
		 * Get the transformer instance.
		 *
		 * @return IncidentTransformer
		 */
		public function getTransformer() {
			return new IncidentTransformer();
		}
	}
