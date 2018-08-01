@each('partials.component-group', $component_groups, 'componentGroup')

@if($ungroupedComponents->isNotEmpty())
<ul class="list-group components">
    <li class="list-group-item group-name">
        <strong>{{ trans('cachet.components.group.other') }}</strong>

        <div class="pull-right">
            <i class="ion ion-ios-circle-filled text-component-{{ $ungroupedComponents->max('status') }} {{ $ungroupedComponents->sortByDesc('status')->first()->status_color }}" data-toggle="tooltip" title="{{ $ungroupedComponents->sortByDesc('status')->first()->human_status }}"></i>
        </div>
    </li>

    @each('partials.component', $ungroupedComponents, 'component')
</ul>
@endif
