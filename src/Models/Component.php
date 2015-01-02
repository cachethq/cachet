<?php

namespace CachetHQ\Cachet\Models;

use CachetHQ\Cachet\Transformers\ComponentTransformer;
use Dingo\Api\Transformer\TransformableInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Watson\Validating\ValidatingTrait;

/**
 * @property int            $id
 * @property int            $user_id
 * @property string         $name
 * @property string         $description
 * @property int            $status
 * @property string         $link
 * @property string         $tags
 * @property int            $order
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 */
class Component extends Model implements TransformableInterface
{
    use SoftDeletingTrait, ValidatingTrait;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    protected $rules = [
        'user_id' => 'integer|required',
        'name'    => 'required',
        'status'  => 'integer',
        'link'    => 'url',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'description', 'status', 'user_id', 'tags', 'link', 'order'];

    /**
     * Lookup all of the incidents reported on the component.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidents()
    {
        return $this->hasMany('CachetHQ\Cachet\Models\Incident', 'component_id', 'id');
    }

    /**
     * Finds all components by status.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int                                   $status
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStatus(Builder $query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Finds all components which don't have the given status.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int                                   $status
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNotStatus(Builder $query, $status)
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
        return trans('cachet.component.status.'.$this->status);
    }

    /**
     * Get the transformer instance.
     *
     * @return \CachetHQ\Cachet\Transformers\ComponentTransformer
     */
    public function getTransformer()
    {
        return new ComponentTransformer();
    }
}
