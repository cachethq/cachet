@if($componentGroup->all_enabled_components()->get()->count() > 0)
@if($componentGroup->parent_id == 0)
<ul class="list-group components">
@else
<ul class="list-subgroup components">
@endif
    <li class="list-group-item group-name">
        <i class="{{ $componentGroup->collapse_class }} group-toggle"></i>
        <span class="component-group-name">{{ $componentGroup->name }}</span>
    </li>
    <div class="group-items {{ $componentGroup->is_collapsed ? "hide" : null }}">
        @each('dashboard.partials.component-group', $componentGroup->active_subgroups()->orderBy('order')->get(), 'componentGroup')
        @each('dashboard.partials.component', $componentGroup->enabled_components, 'component')
    </div>
</ul>
@endif