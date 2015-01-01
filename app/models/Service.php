<?php

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Service extends Model
{
    use ValidatingTrait;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    protected $rules = [
        'type'       => 'alpha_dash|required',
        'active'     => 'required|in:0,1',
        'properties' => '',
    ];

    /**
     * Returns a decoded properties object for the service.
     *
     * @param string $properties
     *
     * @return object
     */
    public function getPropertiesAttribute($properties)
    {
        return json_decode($properties);
    }

    /**
     * Sets the properties attribute which auto encodes to a JSON string.
     *
     * @param mixed $properties
     */
    public function setPropertiesAttribute($properties)
    {
        $this->attributes['properties'] = json_encode($properties);
    }
}
