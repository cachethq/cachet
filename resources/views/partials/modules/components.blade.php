@if($componentGroups->isNotEmpty() || $ungroupedComponents->isNotEmpty())
<div class="section-components">
    @include('partials.components')
</div>
@endif
