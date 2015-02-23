<?php

namespace CachetHQ\Cachet\Transformers;

use CachetHQ\Cachet\Models\Tag;
use League\Fractal\TransformerAbstract;

class TagTransformer extends TransformerAbstract
{
    /**
     * Transform a tag model into an array.
     *
     * @param \CachetHQ\Cachet\Models\Tag $tag
     *
     * @return array
     */
    public function transform(Tag $tag)
    {
        return [
            'id'          => (int) $tag->id,
            'name'        => $tag->name,
            'description' => $tag->slug,
            'created_at'  => $tag->created_at->timestamp,
            'updated_at'  => $tag->updated_at->timestamp,
        ];
    }
}
