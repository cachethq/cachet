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
        'link'    => 'url',
    ];

    protected $fillable = [
        'name',
        'description',
        'status',
        'user_id',
        'tags',
        'link',
        'order',
    ];

    /**
     * Lookup all of the incidents reported on the component.
     *
     * @return Illuminate\Database\Eloquent\Relations
     */
    public function incidents()
    {
        return $this->hasMany('Incident', 'component_id', 'id');
    }

    /**
     * Finds all components by status.
     *
     * @param Illuminate\Database\Eloquent\Builder $query
     * @param int                                  $status
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Finds all components which don't have the given status.
     *
     * @param Illuminate\Database\Eloquent\Builder $query
     * @param int                                  $status
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeNotStatus($query, $status)
    {
        return $query->where('status', '<>', $status);
    }

    /**
     * Looks up the human readable version of the status.
     *
     * @return string
     */
    public function getHumanStatusAttribute()
    {
        return Lang::get('cachet.component.status.'.$this->status);
    }

    /**
     * Get the transformer instance.
     *
     * @return ComponentTransformer
     */
    public function getTransformer()
    {
        return new CachetHQ\Cachet\Transformers\ComponentTransformer();
    }
}
