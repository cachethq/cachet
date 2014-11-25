<?php

	use Watson\Validating\ValidatingTrait;

	class Subscriber extends Eloquent {
		use ValidatingTrait;

		protected $rules = [
			'email' => 'required|email'
		];

		protected $fillable = ['email'];
	}
