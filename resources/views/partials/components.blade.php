@if($componentGroups->isNotEmpty())
@foreach($componentGroups as $componentGroup)
<ul class="list-group components">
    @if($componentGroup->enabled_components->isNotEmpty())
    <li class="list-group-item group-name">
        <i class="{{ $componentGroup->collapse_class }} group-toggle"></i>
        <strong>{{ $componentGroup->name }}</strong>

        <div class="pull-right">
            <i class="ion ion-ios-circle-filled text-component-{{ $componentGroup->lowest_status }} {{ $componentGroup->lowest_status_color }}" data-toggle="tooltip" title="{{ $componentGroup->lowest_human_status }}"></i>
        </div>
    </li>

    <div class="group-items {{ $componentGroup->is_collapsed ? "hide" : null }}">
        @each('partials.component', $componentGroup->enabled_components, 'component')
    </div>
    @endif
</ul>
@endforeach
@endif

@if($ungroupedComponents->isNotEmpty())
<ul class="list-group components">
    <li class="list-group-item group-name">
        <strong>{{ trans('cachet.components.group.other') }}</strong>

        <div class="pull-right">
            <i class="ion ion-ios-circle-filled text-component-{{ $ungroupedComponents->max('status') }} {{ $ungroupedComponents->first()->status_color }}" data-toggle="tooltip" title="{{ $ungroupedComponents->first()->human_status }}"></i>
        </div>
    </li>

    @each('partials.component', $ungroupedComponents, 'component')
</ul>
@endif
