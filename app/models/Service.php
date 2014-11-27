<?php

use Watson\Validating\ValidatingTrait;

class Service extends Eloquent {
    use ValidatingTrait;

    protected $rules = [
        'type'       => 'alpha_dash|required',
        'active'     => 'required|in:0,1',
        'properties' => ''
    ];

    public function getPropertiesAttribute($properties) {
        return json_decode($properties);
    }

    public function setPropertiesAttribute($properties) {
        $this->attributes['properties'] = json_encode($properties);
    }
}