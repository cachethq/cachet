<?php

namespace CachetHQ\Cachet\Services;

class GroupStatusCalculator
{
    public function calculateGroupStatus($components)
    {
        $groupHasComponentsWithTag = false;
        $groupStatusColor = null;

        foreach ($components as $component) {
            $tagsArray = json_decode($component->tags, true);
            $selectedTag = request()->input('tag');

            if ($selectedTag === null || ($tagsArray !== null && array_key_exists($selectedTag, $tagsArray))) {
                $groupHasComponentsWithTag = true;

                                
                $componentStatus = $component->status_color;

                if ($componentStatus === 'reds') {
                    $groupStatusColor = 'reds';
                    break;
                } elseif ($componentStatus === 'yellows' && $groupStatusColor !== 'reds') {
                    $groupStatusColor = 'yellows';
                } elseif ($componentStatus === 'blues' && $groupStatusColor !== 'reds' && $groupStatusColor !== 'yellows') {
                    $groupStatusColor = 'blues';
                } elseif ($componentStatus === 'greens' && $groupStatusColor !== 'reds' && $groupStatusColor !== 'yellows' && $groupStatusColor !== 'blues') {
                    $groupStatusColor = 'greens';
                } elseif ($componentStatus === 'greys' && !$groupStatusColor) {
                    $groupStatusColor = 'greys';
                }
            }
        }

        return compact('groupHasComponentsWithTag', 'groupStatusColor');
    }
}