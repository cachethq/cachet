@php
    $componentsComposer = new CachetHQ\Cachet\Services\GroupStatusCalculator;

@endphp

@foreach($componentGroups as $componentGroup)
    @php
        $groupStatus = $componentsComposer->calculateGroupStatus($componentGroup->enabled_components);    
    @endphp
    
    @if($groupStatus['groupHasComponentsWithTag'])
        <ul class="list-group components">
            <li class="list-group-item group-name">
                <i class="{{ $componentGroup->collapse_class }} group-toggle"></i>
                <strong>{{ $componentGroup->name }}</strong>
                <div class="pull-right">
                    {{-- Use $groupStatus['groupStatusColor'] for the class --}}
                    <i class="ion ion-ios-circle-filled text-component-{{ $groupStatus['groupStatusColor'] }} {{ $groupStatus['groupStatusColor'] }}" data-toggle="tooltip" title="{{ $componentGroup->lowest_human_status }}"></i>
                </div>
            </li>
            <div class="group-items {{ $componentGroup->is_collapsed ? "hide" : null }}">
                @each('partials.component', $componentGroup->enabled_components, 'component')
            </div>
        </ul>
    @endif
@endforeach

@if($ungroupedComponents->isNotEmpty())
    @php 
        $groupStatus = $componentsComposer->calculateGroupStatus($ungroupedComponents);
    @endphp

    @if($groupStatus['groupHasComponentsWithTag'])
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
@endif
