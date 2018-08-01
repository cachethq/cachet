@if($componentGroup->all_enabled_components()->get()->count()>0)
@if($componentGroup->parent_id == 0)
<ul class="list-group components">
    <li class="list-group-item group-name">
        <i class="{{ $componentGroup->collapse_class }} group-toggle"></i>
        <strong>{{ $componentGroup->name }}</strong>
@else
<ul class="list-subgroup components">
    <li class="list-group-item group-name">
        <i class="{{ $componentGroup->collapse_class }} group-toggle"></i>
        {{ $componentGroup->name }}
@endif
        <div class="pull-right">
            <i class="ion ion-ios-circle-filled text-component-{{ $componentGroup->lowest_status }} {{ $componentGroup->lowest_status_color }}" data-toggle="tooltip" title="{{ $componentGroup->lowest_human_status }}"></i>
        </div>
    </li>

    <div class="group-items {{ $componentGroup->is_collapsed ? "hide" : null }}">
    @each('partials.component-group', $componentGroup->active_subgroups()->orderBy('order')->get(), 'componentGroup')
    @each('partials.component', $componentGroup->enabled_components()->orderBy('order')->get(), 'component')
    </div>
</ul>
@endif