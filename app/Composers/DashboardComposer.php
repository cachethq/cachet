<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Models\Plugin;
use Illuminate\Contracts\View\View;

class DashboardComposer
{
    /**
     * Bind data to the view.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->withIncidentCount(Incident::notScheduled()->count());
        $view->withIncidentTemplateCount(IncidentTemplate::count());
        $view->withComponentCount(Component::all()->count());
        $view->withSubscriberCount(Subscriber::isVerified()->count());
        $view->withPluginCount(Plugin::enabled()->count());

        $view->withTabs($this->getTabs($view->getData()));
    }

    /**
     * Get the tabs.
     *
     * @param array $data
     *
     * @return array
     */
    protected function getTabs(array $data)
    {
        $tabs = [[
            'active' => 'dashboard',
            'url'    => route('dashboard.index'),
            'icon'   => 'ion ion-speedometer',
            'title'  => trans('dashboard.dashboard'),
        ], [
            'active' => ['dashboard/incidents*', 'dashboard/schedule*'],
            'url'    => route('dashboard.incidents.index'),
            'icon'   => 'ion ion-ios-information-outline',
            'title'  => trans('dashboard.incidents.incidents'),
            'label'  => [
                'class' => 'label-info',
                'text'  => $data['incident_count'],
            ],
        ], [
            'active' => 'dashboard/templates*',
            'url'    => route('dashboard.templates.index'),
            'icon'   => 'ion ion-ios-paper-outline',
            'title'  => trans('dashboard.incidents.incident-templates'),
            'label'  => [
                'class' => 'label-info',
                'text'  => $data['incident_template_count'],
            ],
        ], [
            'active' => 'dashboard/components*',
            'url'    => route('dashboard.components.index'),
            'icon'   => 'ion ion-ios-paper-outline',
            'title'  => trans('dashboard.components.components'),
            'label'  => [
                'class' => 'label-info',
                'text'  => $data['component_count'],
            ],
        ], [
            'active' => 'dashboard/metrics*',
            'url'    => route('dashboard.metrics.index'),
            'icon'   => 'ion ion-ios-pie-outline',
            'title'  => trans('dashboard.metrics.metrics'),
        ], [
            'active' => 'dashboard/subscribers*',
            'url'    => route('dashboard.subscribers.index'),
            'icon'   => 'ion ion-ios-email-outline',
            'title'  => trans('dashboard.subscribers.subscribers'),
            'label'  => [
                'class' => 'label-info',
                'text'  => $data['subscriber_count'],
            ],
        ], [
            'active' => 'dashboard/team*',
            'url'    => route('dashboard.team.index'),
            'icon'   => 'ion ion-ios-people-outline',
            'title'  => trans('dashboard.team.team'),
        ], [
            'active' => 'dashboard/plugins*',
            'url'    => route('dashboard.plugins.index'),
            'icon'   => 'ion ion-ios-color-filter-outline',
            'title'  => trans('dashboard.plugins.plugins'),
            'label'  => [
                'class' => 'label-info',
                'text'  => $data['plugin_count'],
            ],
        ], [
            'active' => 'dashboard/settings*',
            'url'    => route('dashboard.settings.setup'),
            'icon'   => 'ion ion-ios-gear-outline',
            'title'  => trans('dashboard.settings.settings'),
        ]];

        if (isset($data['tabs'])) {
            $tabs = array_merge_recursive($tabs, $data['tabs']);
        }

        return $tabs;
    }
}
