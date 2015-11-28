<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Dashboard;

use CachetHQ\Cachet\GitHub\Release;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\IncidentTemplate;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller
{
    /**
     * The release instance.
     *
     * @var \CachetHQ\Cachet\GitHub\Release
     */
    protected $release;

    /**
     * Creates a new api controller instance.
     *
     * @param \CachetHQ\Cachet\GitHub\Release $release
     *
     * @return void
     */
    public function __construct(Release $release)
    {
        $this->release = $release;
    }

    /**
     * Updates a component with the entered info.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @throws \Exception
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function postUpdateComponent(Component $component)
    {
        if (!$component->update(Binput::except(['_token']))) {
            throw new Exception(trans('dashboard.components.edit.failure'));
        }

        return $component;
    }

    /**
     * Updates a components ordering.
     *
     * @return array
     */
    public function postUpdateComponentOrder()
    {
        $componentData = Binput::get('ids');

        foreach ($componentData as $order => $componentId) {
            // Ordering should be 1-based, data comes in 0-based
            Component::find($componentId)->update(['order' => $order + 1]);
        }

        return $componentData;
    }

    /**
     * Updates the order of component groups.
     *
     * @return array
     */
    public function postUpdateComponentGroupOrder()
    {
        $groupData = Binput::get('ids');

        foreach ($groupData as $order => $groupId) {
            ComponentGroup::find($groupId)->update(['order' => $order + 1]);
        }

        return $groupData;
    }

    /**
     * Returns a template by slug.
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return \CachetHQ\Cachet\Models\IncidentTemplate
     */
    public function getIncidentTemplate()
    {
        $templateSlug = Binput::get('slug');

        if ($template = IncidentTemplate::where('slug', $templateSlug)->first()) {
            return $template;
        }

        throw new ModelNotFoundException("Incident template for $templateSlug could not be found.");
    }

    /**
     * Checks if Cachet is up to date.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkVersion()
    {
        return Response::json([
            'cachet_version' => CACHET_VERSION,
            'latest_version' => $this->release->latest(),
            'is_latest'      => version_compare(CACHET_VERSION, $this->release->latest()) === 1,
        ]);
    }
}
