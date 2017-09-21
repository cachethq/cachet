@if($component_groups->count() > 0)
@foreach($component_groups as $component_group)
@if($component_group->enabled_components)
<ul class="list-group components">
    <li class="list-group-item group-name">
        <i class="{{ $component_group->collapse_class }} group-toggle"></i>
        <span class="component-group-name">{{ $component_group->name }}</span>
    </li>
    <div class="group-items {{ $component_group->is_collapsed ? "hide" : null }}">
        @foreach($component_group->enabled_components()->orderBy('order')->get() as $component)
        @include('dashboard.partials.component', compact($component))
        @endforeach
    </div>
</ul>
@endif
@endforeach
@endif

@if($ungrouped_components->count() > 0)
<ul class="list-group components">
    @if($component_groups->count() > 0)
    <li class="list-group-item group-name">
        <span class="component-group-other">{{ trans('cachet.components.group.other') }}</span>
    </li>
    @endif
    @foreach($ungrouped_components as $component)
    @include('dashboard.partials.component', compact($component))
    @endforeach
</ul>
@endif
