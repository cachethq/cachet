@if($componentGroups->isNotEmpty() || $ungroupedComponents->isNotEmpty())
<div class="section-components">
    @include('theme::partials.components')
</div>
@endif
