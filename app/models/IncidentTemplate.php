<?php

	use Watson\Validating\ValidatingTrait;

	class IncidentTemplate extends Eloquent {
		use ValidatingTrait;

		protected $rules = [
			'name'     => 'alpha|required',
			'slug'     => 'alpha_dash|required',
			'template' => 'required'
		];

		public static function boot() {
			parent::boot();

			self::on('saving', function($template) {
				$template->slug = Str::slug($template->name);
			});
		}
	}
