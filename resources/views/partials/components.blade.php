@if($component_groups->count() > 0)
<div class="section-filters">
    <div class="dropdown">
        Display component groups:
        <a href="javascript: void(0);" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            @if($component_group_selected)
            <span class="filter">{{ $component_group_selected->name }}</span>
            @else
            <span class="filter">All</span>
            @endif
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="/" data-filter-component="0">All</a></li>
            @foreach($all_component_groups as $componentGroup)
            <li><a href="/group/{{ $componentGroup->id }}">{{ $componentGroup->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endif

@if($component_groups->count() > 0)
@foreach($component_groups as $componentGroup)
<ul class="list-group components">
    @if($componentGroup->enabled_components->count() > 0)
    <li class="list-group-item group-name">
        <i class="{{ $componentGroup->collapse_class }} group-toggle"></i>
        <strong>{{ $componentGroup->name }}</strong>

        <div class="pull-right">
            <i class="ion ion-ios-circle-filled text-component-{{ $componentGroup->lowest_status }} {{ $componentGroup->lowest_status_color }}" data-toggle="tooltip" title="{{ $componentGroup->lowest_human_status }}"></i>
        </div>
    </li>

    <div class="group-items {{ $componentGroup->is_collapsed ? "hide" : null }}">
        @foreach($componentGroup->enabled_components()->orderBy('order')->get() as $component)
        @include('partials.component', compact($component))
        @endforeach
    </div>
    @endif
</ul>
@endforeach
@endif

@if($ungrouped_components->count() > 0)
<ul class="list-group components">
    <li class="list-group-item group-name"><strong>{{ trans('cachet.components.group.other') }}</strong></li>
    @foreach($ungrouped_components as $component)
    @include('partials.component', compact($component))
    @endforeach
</ul>
@endif
