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
        @each('partials.component', $componentGroup->enabled_components()->orderBy('order')->get(), 'component')
    </div>
    @endif
</ul>
@endforeach
@endif

@if($ungrouped_components->count() > 0)
<ul class="list-group components">
    <li class="list-group-item group-name">
        <strong>{{ trans('cachet.components.group.other') }}</strong>

        <div class="pull-right">
            <i class="ion ion-ios-circle-filled text-component-{{ $ungrouped_components->max('status') }} {{ $ungrouped_components->sortByDesc('status')->first()->status_color }}" data-toggle="tooltip" title="{{ $ungrouped_components->sortByDesc('status')->first()->human_status }}"></i>
        </div>
    </li>

    @each('partials.component', $ungrouped_components, 'component')
</ul>
@endif
