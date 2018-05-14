<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Integrations\Core;

use CachetHQ\Cachet\Integrations\Contracts\System as SystemContract;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Schedule;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Config\Repository;

/**
 * This is the core system class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class System implements SystemContract
{
    /**
     * The illuminate config instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * The illuminate guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new system instance.
     *
     * @param \Illuminate\Contracts\Config\Repository $config
     * @param \Illuminate\Contracts\Auth\Guard        $auth
     *
     * @return void
     */
    public function __construct(Repository $config, Guard $auth)
    {
        $this->config = $config;
        $this->auth = $auth;
    }

    /**
     * Get the entire system status.
     *
     * @return array
     */
    public function getStatus()
    {
        $includePrivate = $this->auth->check();

        $totalComponents = Component::enabled()->authenticated($includePrivate)->count();
        $majorOutages = Component::enabled()->authenticated($includePrivate)->status(4)->count();
        $majorOutageRate = (int) $this->config->get('setting.major_outage_rate', '50');
        $isMajorOutage = $totalComponents ? ($majorOutages / $totalComponents) * 100 >= $majorOutageRate : false;

        // Default data
        $status = [
            'system_status'  => 'info',
            'system_message' => trans_choice('cachet.service.bad', $totalComponents),
            'favicon'        => 'favicon-high-alert',
        ];

        if ($isMajorOutage) {
            $status = [
                'system_status'  => 'danger',
                'system_message' => trans_choice('cachet.service.major', $totalComponents),
                'favicon'        => 'favicon-high-alert',
            ];
        } elseif (Component::enabled()->authenticated($includePrivate)->notStatus(1)->count() === 0) {
            // If all our components are ok, do we have any non-fixed incidents?
            $incidents = Incident::orderBy('occurred_at', 'desc')->get()->filter(function ($incident) {
                return $incident->status !== Incident::FIXED;
            });
            $incidentCount = $incidents->count();
            $unresolvedCount = $incidents->filter(function ($incident) {
                return !$incident->is_resolved;
            })->count();

            if ($incidentCount === 0 || ($incidentCount >= 1 && $unresolvedCount === 0)) {
                $status = [
                    'system_status'  => 'success',
                    'system_message' => trans_choice('cachet.service.good', $totalComponents),
                    'favicon'        => 'favicon',
                ];
            }
        } elseif (Component::enabled()->authenticated($includePrivate)->whereIn('status', [2, 3])->count() > 0) {
            $status['favicon'] = 'favicon-medium-alert';
        }

        return $status;
    }

    /**
     * Determine if Cachet is allowed to send notifications to users, subscribers or third party tools.
     *
     * @return bool
     */
    public function canNotifySubscribers()
    {
        $maintenancePeriods = Schedule::inProgress()->count();
        if ($maintenancePeriods === 0) {
            return true;
        }

        return !$this->config->get('setting.suppress_notifications_in_maintenance');
    }

    /**
     * Get the cachet version.
     *
     * @return string
     */
    public function getVersion()
    {
        return CACHET_VERSION;
    }

    /**
     * Get the table prefix.
     *
     * @return string
     */
    public function getTablePrefix()
    {
        $driver = $this->config->get('database.default');

        return $this->config->get("database.connections.{$driver}.prefix");
    }
}
