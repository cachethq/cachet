<?php

	class WebHook extends Eloquent {
		public function response() {
			return $this->hasMany('WebHookContent', 'hook_id', 'id');
		}
	}
