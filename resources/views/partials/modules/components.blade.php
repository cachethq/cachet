@if($component_groups->isNotEmpty() || $ungrouped_components->isNotEmpty())
<div class="section-components">
    @include('partials.components')
</div>
@endif
