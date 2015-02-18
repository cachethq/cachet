<?php

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Repositories\Component\ComponentRepository;
use CachetHQ\Cachet\Models\Tag;
use Dingo\Api\Routing\ControllerTrait;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;

class ComponentController extends Controller
{
    use ControllerTrait;

    /**
     * The component repository instance.
     *
     * @var \CachetHQ\Cachet\Repositories\Component\ComponentRepository
     */
    protected $component;

    /**
     * Create a new component controller instance.
     *
     * @param \CachetHQ\Cachet\Repositories\Component\ComponentRepository $component
     *
     * @return void
     */
    public function __construct(ComponentRepository $component)
    {
        $this->component = $component;
    }

    /**
     * Get all components.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getComponents()
    {
        return $this->component->all();
    }

    /**
     * Get a single component.
     *
     * @param int $id
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function getComponent($id)
    {
        return $this->component->findOrFail($id);
    }

    /**
     * Return a component with incidents.
     *
     * @param int $id
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function getComponentIncidents($id)
    {
        return $this->component->with($id, ['incidents']);
    }

    /**
     * Create a new component.
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function postComponents()
    {
        $component = $this->component->create(
            $this->auth->user()->id,
            Binput::except('tags')
        );

        if (Binput::has('tags')) {
            // The component was added successfully, so now let's deal with the tags.
            $tags = preg_split('/ ?, ?/', Binput::get('tags'));

            // For every tag, do we need to create it?
            $componentTags = array_map(function ($taggable) use ($component) {
                return Tag::firstOrCreate([
                    'name' => $taggable,
                ])->id;
            }, $tags);

            $component->tags()->sync($componentTags);
        }

        return $component;
    }

    /**
     * Delete an existing component.
     *
     * @param int $id
     *
     * @return \Dingo\Api\Http\Response
     */
    public function deleteComponent($id)
    {
        $this->component->destroy($id);

        return $this->response->noContent();
    }
}
