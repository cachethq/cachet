<?php

	class IncidentTemplate extends Eloquent {
		public static function boot() {
			parent::boot();

			self::on('saving', function($template) {
				$template->slug = Str::slug($template->name);
			});
		}
	}
