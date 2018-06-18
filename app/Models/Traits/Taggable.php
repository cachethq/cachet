<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models\Traits;

use CachetHQ\Cachet\Models\Tag;
use CachetHQ\Cachet\Models\Taggable as TaggableModel;
use Illuminate\Database\Eloquent\Builder;
use InvalidArgumentException;

/**
 * This is the taggable trait.
 *
 * @author James Brooks <james@alt-three.com>
 */
trait Taggable
{
    /**
     * Get the tags relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array|\ArrayAccess                    $tags
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithAllTags(Builder $query, $tags)
    {
        $tags = static::convertToTags($tags);

        return $tags->each(function ($tag) use ($query) {
            $query->whereHas('tags', function (Builder $query) use ($tag) {
                return $query->where('id', $tag ? $tag->id : 0);
            });
        });

        return $query;
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array|\ArrayAccess                    $tags
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithAnyTags(Builder $query, $tags)
    {
        $tags = static::convertToTags($tags);

        return $query->whereHas('tags', function (Builder $query) use ($tags) {
            $tagIds = $tags->pluck('id')->toArray();

            // dd($tagIds);

            $query->where('taggables.tag_id', '=', 1);
        });
    }

    /**
     * Convert a list of tags into a collection of \CachetHQ\Cachet\Models\Tag
     *
     * @param array|\ArrayAccess $values
     *
     * @return \Illuminate\Support\Collection
     */
    protected static function convertToTags($values)
    {
        return collect($values)->map(function ($value) {
            if ($value instanceof Tag) {
                return $value;
            }

            return Tag::where('slug', '=', $value)->first();
        });
    }
}
