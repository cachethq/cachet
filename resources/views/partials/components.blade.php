@if ($component_groups->isNotEmpty())
@foreach ($component_groups as $group)
<div class="panel panel-dark panel--group panel--components">
    <div class="panel-heading">
        <div class="panel__icon">
            <i class="ion-ios-circle-filled"></i>
        </div>
        <h3 class="panel-title uppercase">{{ $group->name }}</h3>
        <p class="panel__subtitle text-uppercase">New component description feature!</p>
        <div class="panel__toolbar no-select">
            <ul class="list-inline">
                <li><a href="#"><span class="glyphicon glyphicon-chevron-down"></span></a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body">
        <div class="list-group">
            <div class="list-group-item component component--status-1">
                <div class="component__icon">
                    <span class="glyphicon glyphicon-ok"></span>
                </div>
                <div class="component__name">
                    Blog
                </div>
                <div class="component__link hidden-xs">
                    <a href="https://blog.alt-three.com">https://blog.alt-three.com</a>
                </div>
                <div class="component__status">
                    Operational
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif

@if($component_groups->isNotEmpty())
@foreach($component_groups as $componentGroup)
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
        @each('partials.component', $componentGroup->enabled_components()->orderBy('order')->get(), 'component')
    </div>
    @endif
</ul>
@endforeach
@endif

@if($ungrouped_components->isNotEmpty())
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
