@if(!$component_groups->isEmpty() || !$ungrouped_components->isEmpty() || $component_group_selected || $component_selected)
<div class="section-components">
    @include('partials.components')
</div>
@endif
