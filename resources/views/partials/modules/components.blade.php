@if(!$component_groups->isEmpty() || !$ungrouped_components->isEmpty())
<div class="section-components">
    @include('partials.components')
</div>
@endif
