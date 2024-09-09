<?php 

namespace CachetHQ\Cachet\Services;

use CachetHQ\Cachet\Services\GroupStatusCalculator;

class GroupStatusService
{
    protected $groupStatusCalculator;

    public function __construct(GroupStatusCalculator $groupStatusCalculator)
    {
        $this->groupStatusCalculator = $groupStatusCalculator;
    }

    public function calculateGroupStatus($components)
    {
        return $this->groupStatusCalculator->calculateGroupStatus($components);
    }
}
