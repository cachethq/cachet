<?php

	class IncidentTemplate extends Eloquemt {
		public static function boot() {
			parent::boot();

			self::on('saving', function($template) {
				$template->slug = Str::slug($template->name);
			});
		}
	}
