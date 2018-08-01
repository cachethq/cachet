@each('dashboard.partials.component-group', $component_groups, 'componentGroup')

@if($ungroupedComponents->count() > 0)
<ul class="list-group components">
    @if($componentGroups->count() > 0)
    <li class="list-group-item group-name">
        <span class="component-group-other">{{ trans('cachet.components.group.other') }}</span>
    </li>
    @endif
    @foreach($ungroupedComponents as $component)
    @include('dashboard.partials.component', compact($component))
    @endforeach
</ul>
@endif
