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

use CachetHQ\Cachet\Bus\Commands\ComponentTag\AddComponentTagCommand;
use CachetHQ\Cachet\Bus\Commands\ComponentTag\DeleteComponentTagCommand;
use CachetHQ\Cachet\Bus\Exceptions\Tag\TagDoesNotExistOnComponentException;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentTag;
use CachetHQ\Cachet\Models\Tag;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * This is the component tag controller class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ComponentTagController extends AbstractApiController
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
     * Get a single component tag.
     *
     * @param \CachetHQ\Cachet\Models\ComponentTag $componentTag
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTag(ComponentTag $componentTag)
    {
        return $this->item($componentTag);
    }

    /**
     * Create a new component tag.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postTags()
    {
        $component = Component::find(Binput::get('component_id'));
        $tag = Tag::find(Binput::get('tag_id'));

        if (!($component && $tag)) {
            throw new BadRequestHttpException();
        }

        try {
            $tag = dispatch(new AddComponentTagCommand(
                $component,
                $tag
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($tag);
    }

    /**
     * Delete an existing tag.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteTag()
    {
        $component = Component::find(Binput::get('component_id'));
        $tag = Tag::find(Binput::get('tag_id'));

        if (!($component && $tag)) {
            throw new BadRequestHttpException();
        }

        try {
            dispatch(new DeleteComponentTagCommand(
                $component,
                $tag
            ));
        } catch (TagDoesNotExistOnComponentException $e) {
            throw new BadRequestHttpException();
        }

        return $this->noContent();
    }
}
