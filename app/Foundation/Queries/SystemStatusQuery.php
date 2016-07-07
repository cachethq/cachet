<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Queries;

use Illuminate\Database\Eloquent;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Foundation\Policies\SystemStatus\MajorOutagePolicy;

class SystemStatusQuery
{
    /**
     * @return string
     */
    public function getSystemStatus()
    {
        $systemStatus = 'info';

        if ($this->isMajorOutaged()) {
            $systemStatus = 'danger';
        } elseif ($this->isAllTheEnabledComponentsWork() && $this->isAllTheIncidentsFixed()) {
            $systemStatus = 'success';
        }

        return $systemStatus;
    }

    /**
     * @return bool
     */
    public function isMajorOutaged()
    {
        return
            (new MajorOutagePolicy(Component::majorOutaged()->count(), Component::enabled()->count()))
            ->isMajorOutaged();
    }

    /**
     * @return bool
     */
    public function isAllTheEnabledComponentsWork()
    {
        return Component::notOperationaled()->count() === 0;
    }

    /**
     * @return bool
     */
    public function isAllTheIncidentsFixed()
    {
        return Incident::isAllAreFixed();
    }
}
