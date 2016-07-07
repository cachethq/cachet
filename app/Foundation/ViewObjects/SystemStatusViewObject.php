<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\ViewObjects;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Foundation\Queries\SystemStatusQuery;

class SystemStatusViewObject
{
    /**
     * @var SystemStatusQuery
     */
    private $systemStatusQuery;

    /**
     * @param SystemStatusQuery $systemStatusQuery
     */
    public function __construct(SystemStatusQuery $systemStatusQuery) {
        $this->systemStatusQuery = $systemStatusQuery;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $systemStatus           = $this->systemStatusQuery->getSystemStatus();
        $numOfEnabledComponents = Component::enabled()->count();
        $viewData               = [
            'system_status'  => $systemStatus,
            'system_message' => trans_choice('cachet.service.bad', $numOfEnabledComponents),
            'favicon'        => 'favicon-high-alert',
        ];

        if ($systemStatus === 'danger') {
            $viewData['system_message'] = trans_choice('cachet.service.major', $numOfEnabledComponents);
            $viewData['favicon']        = 'favicon-high-alert';
        } elseif ($systemStatus === 'success') {
            $viewData['system_message'] = trans_choice('cachet.service.major', $numOfEnabledComponents);
            $viewData['favicon']        = 'favicon';
        }

        if ( ! $this->systemStatusQuery->isMajorOutaged()
            && ! $this->systemStatusQuery->isAllTheEnabledComponentsWork()
            && Component::enabled()->whereIn('status', [2, 3])->count() > 0) {
            $viewData['favicon'] = 'favicon-medium-alert';
        }

        return $viewData;
    }
}
