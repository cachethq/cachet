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
 * @property int            $order
 * @property int            $group_id
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
    protected $fillable = [
        'name',
        'description',
        'status',
        'user_id',
        'tags',
        'link',
        'order',
        'group_id',
    ];

    /**
     * List of attributes that have default values.
     *
     * @var array
     */
    protected $attributes = [
        'order'    => 0,
        'group_id' => 0,
    ];

    /**
     * Components can belong to a group.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo('CachetHQ\Cachet\Models\ComponentGroup', 'group_id', 'id');
    }

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
     * Components can have many tags.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('CachetHQ\Cachet\Models\Tag');
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
        return trans('cachet.components.status.'.$this->status);
    }

    /**
     * Returns all of the tags on this component.
     *
     * @return string
     */
    public function getTagsListAttribute()
    {
        $tags = $this->tags->map(function ($tag) {
            return $tag->name;
        });

        return implode(', ', $tags->toArray());
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
