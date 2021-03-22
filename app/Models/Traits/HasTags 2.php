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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * This is the has tags trait.
 * Code based on https://github.com/spatie/laravel-tags.
 *
 * @author James Brooks <james@alt-three.com>
 */
trait HasTags
{
    /**
     * @var array
     */
    protected $queuedTags = [];

    /**
     * Boot the trait.
     *
     * @return void
     */
    public static function bootHasTags()
    {
        static::created(function (Model $taggableModel) {
            if (count($taggableModel->queuedTags) > 0) {
                $taggableModel->attachTags($taggableModel->queuedTags);

                $taggableModel->queuedTags = [];
            }
        });

        static::deleted(function (Model $deletedModel) {
            $tags = $deletedModel->tags()->get();

            $deletedModel->detachTags($tags);
        });
    }

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
     * @param string|array|\ArrayAccess|\CachetHQ\Cachet\Models\Tag $tags
     */
    public function setTagsAttribute($tags)
    {
        if (!$this->exists) {
            $this->queuedTags = $tags;

            return;
        }

        $this->attachTags($tags);
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

        $tags->each(function ($tag) use ($query) {
            $query->whereHas('tags', function (Builder $query) use ($tag) {
                return $query->where('tags.id', $tag ? $tag->id : 0);
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
            $tagIds = collect($tags)->pluck('id');

            $query->whereIn('tags.id', $tagIds);
        });
    }

    /**
     * @param array|\ArrayAccess|\CachetHQ\Cachet\Models\Tag $tags
     *
     * @return $this
     */
    public function attachTags($tags)
    {
        $tags = collect(Tag::findOrCreate($tags));

        $this->tags()->syncWithoutDetaching($tags->pluck('id')->toArray());

        return $this;
    }

    /**
     * @param string|\CachetHQ\Cachet\Models\Tag $tag
     *
     * @return $this
     */
    public function attachTag($tag)
    {
        return $this->attachTags([$tag]);
    }

    /**
     * @param array|\ArrayAccess $tags
     *
     * @return $this
     */
    public function detachTags($tags)
    {
        $tags = static::convertToTags($tags);

        collect($tags)
            ->filter()
            ->each(function (Tag $tag) {
                $this->tags()->detach($tag);
            });

        return $this;
    }

    /**
     * @param string|\CachetHQ\Cachet\Models\Tag $tag
     *
     * @return $this
     */
    public function detachTag($tag)
    {
        return $this->detachTags([$tag]);
    }

    /**
     * @param array|\ArrayAccess $tags
     *
     * @return $this
     */
    public function syncTags($tags)
    {
        $tags = collect(Tag::findOrCreate($tags));

        $this->tags()->sync($tags->pluck('id')->toArray());

        return $this;
    }

    /**
     * Convert a list of tags into a collection of \CachetHQ\Cachet\Models\Tag.
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
