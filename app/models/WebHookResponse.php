<?php

class WebHookResponse extends Eloquent {
	/**
	 * Returns the hook that a response belongs to.
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function hook() {
        return $this->belongsTo('WebHook', 'id', 'hook_id');
    }
}
