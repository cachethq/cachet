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
use CachetHQ\Cachet\Models\Schedule;
use CachetHQ\Cachet\Models\Subscriber;
use Illuminate\Contracts\View\View;

/**
 * This is the dashboard composer class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class DashboardComposer
{
    /**
     * The component count.
     *
     * @var int
     */
    protected $componentCount;

    /**
     * The incident count.
     *
     * @var int
     */
    protected $incidentCount;

    /**
     * The incident template count.
     *
     * @var int
     */
    protected $incidentTemplateCount;

    /**
     * The schedule count.
     *
     * @var int
     */
    protected $scheduleCount;

    /**
     * The subscriber count.
     *
     * @var int
     */
    protected $subscriberCount;

    /**
     * Create a new dashboard composer instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (is_null($this->componentCount)) {
            $this->componentCount = Component::count();
        }

        if (is_null($this->incidentCount)) {
            $this->incidentCount = Incident::count();
        }

        if (is_null($this->incidentTemplateCount)) {
            $this->incidentTemplateCount = IncidentTemplate::count();
        }

        if (is_null($this->scheduleCount)) {
            $this->scheduleCount = Schedule::count();
        }

        if (is_null($this->subscriberCount)) {
            $this->subscriberCount = Subscriber::isVerified()->count();
        }
    }

    /**
     * Bind data to the view.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->withComponentCount($this->componentCount);
        $view->withIncidentCount($this->incidentCount);
        $view->withIncidentTemplateCount($this->incidentTemplateCount);
        $view->withScheduleCount($this->scheduleCount);
        $view->withSubscriberCount($this->subscriberCount);
        $view->withIsWriteable(is_writable(app()->bootstrapPath().'/cachet'));
    }
}
