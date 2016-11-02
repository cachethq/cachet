<div class="dropdown">
    {{ trans('cachet.components.filter') }}
    <a href="javascript: void(0);" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        @if($component_selected)
        <span class="filter">{{ $component_selected->name }}</span>
        @elseif($component_group_selected)
        <span class="filter">{{ $component_group_selected->name }}</span>
        @else
        <span class="filter">All</span>
        @endif
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="{{ cachet_route('status-page') }}">All</a></li>
        @foreach($all_component_groups as $componentGroup)
        <li class="group"><a href="{{ cachet_route('group-status-page', [$componentGroup->id]) }}">{{ $componentGroup->name }}</a></li>
        @foreach($componentGroup->enabled_components()->orderBy('order')->get() as $component)
        <li class="grouped"><a href="{{ cachet_route('component-status-page', [$component->id]) }}">{{ $component->name }}</a></li>
        @endforeach
        @endforeach
        @foreach($ungrouped_components as $component)
        <li><a href="{{ cachet_route('component-status-page', [$component->id]) }}">{{ $component->name }}</a></li>
        @endforeach
    </ul>
</div>
