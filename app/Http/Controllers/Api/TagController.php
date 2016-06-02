<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Bus\Commands\Tag\CreateTagCommand;
use CachetHQ\Cachet\Bus\Commands\Tag\DeleteTagCommand;
use CachetHQ\Cachet\Bus\Commands\Tag\UpdateTagCommand;
use CachetHQ\Cachet\Models\Tag;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class TagController extends AbstractApiController
{
    /**
     * Get all tags.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTags()
    {
        $tags = Tag::query();

        $tags->search(Binput::except(['sort', 'order', 'per_page']));

        if ($sortBy = Binput::get('sort')) {
            $direction = Binput::has('order') && Binput::get('order') == 'desc';

            $tags->sort($sortBy, $direction);
        }

        $tags = $tags->paginate(Binput::get('per_page', 20));

        return $this->paginator($tags, Request::instance());
    }

    /**
     * Get a single tag.
     *
     * @param \CachetHQ\Cachet\Models\Tag $tag
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTag(Tag $tag)
    {
        return $this->item($tag);
    }

    /**
     * Create a new tag.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postTags()
    {
        try {
            $tag = dispatch(new CreateTagCommand(
                Binput::get('name'),
                Binput::get('slug')
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($tag);
    }

    /**
     * Update an existing tag.
     *
     * @param \CachetHQ\Cachet\Models\Tag $tag
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putTag(Tag $tag)
    {
        try {
            $tag = dispatch(new UpdateTagCommand(
                $tag,
                Binput::get('name'),
                Binput::get('slug')
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($tag);
    }

    /**
     * Delete an existing tag.
     *
     * @param \CachetHQ\Cachet\Models\Tag $tag
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteTag(Tag $tag)
    {
        dispatch(new DeleteTagCommand($tag));

        return $this->noContent();
    }
}
