<?php

class WebHookResponse extends Eloquent {
    public function hook() {
        return $this->belongsTo('WebHook', 'id', 'hook_id');
    }
}