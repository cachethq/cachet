<?php

use Watson\Validating\ValidatingTrait;

class Component extends Eloquent implements \Dingo\Api\Transformer\TransformableInterface
{
    use ValidatingTrait;
    use Illuminate\Database\Eloquent\SoftDeletingTrait;

    protected $rules = [
        'user_id' => 'integer|required',
        'name'    => 'required',
        'status'  => 'integer',
    ];

    protected $fillable = ['name', 'description', 'status', 'user_id'];

    /**
     * Lookup all of the incidents reported on the component.
     * @return Illuminate\Database\Eloquent\Relations
     */
    public function incidents()
    {
        return $this->hasMany('Incident', 'component_id', 'id');
    }

    /**
     * Looks up the human readable version of the status.
     * @return string
     */
    public function getHumanStatusAttribute()
    {
        return Lang::get('cachet.component.status.'.$this->status);
    }

    /**
     * Get the transformer instance.
     * @return ComponentTransformer
     */
    public function getTransformer()
    {
        return new CachetHQ\Cachet\Transformers\ComponentTransformer();
    }
}
