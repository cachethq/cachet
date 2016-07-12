<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Policies\SystemStatus;

class MajorOutagePolicy
{
    /**
     * @var int
     */
    private $numOfMajorOutages;

    /**
     * @var int
     */
    private $numOfTotalEnabledComponents;

    /**
     * @param int $numOfMajorOutages
     * @param int $numOfTotalEnabledComponents
     */
    public function __construct($numOfMajorOutages, $numOfTotalEnabledComponents)
    {
        $this->numOfMajorOutages            = $numOfMajorOutages;
        $this->numOfTotalEnabledComponents  = $numOfTotalEnabledComponents;
    }

    /**
     * @return bool
     */
    public function isMajorOutaged()
    {
        return (
            $this->numOfTotalEnabledComponents
                ? ($this->numOfMajorOutages / $this->numOfTotalEnabledComponents) >= 0.5
                : false
        );
    }
}
