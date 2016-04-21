<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * This is the component tag class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ComponentTag extends Model
{
    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'component_id' => 'int',
        'tag_id'       => 'int',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['component_id', 'tag_id'];

    /**
     * Get the component relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function component()
    {
        return $this->belongsTo(Component::class, 'component_id', 'id');
    }

    /**
     * Get the tag relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id', 'id');
    }

    /**
     * Find a given tag for a component.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int                                   $tagId
     * @param int                                   $componentId
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTagForComponent(Builder $query, $tagId, $componentId)
    {
        return $query->where('component_id', $componentId)->where('tag_id', $tagId);
    }
}
