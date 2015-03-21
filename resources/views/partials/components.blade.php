<ul class="list-group components">
    @if($componentGroups->count() > 0)
    @foreach($componentGroups as $componentGroup)
    @if($componentGroup->components->count() > 0)
    <li class="list-group-item group-name"><strong>{{ $componentGroup->name }}</strong></li>

    @foreach($componentGroup->components as $component)
    @include('partials.component', compact($component))
    @endforeach
    @endif
    @endforeach
    @if($ungroupedComponents->count() > 0)
    <li class="list-group-item break"></li>
    @endif
    @endif

    @if($ungroupedComponents->count() > 0)
    @foreach($ungroupedComponents as $component)
    @include('partials.component', compact($component))
    @endforeach
    @endif
</ul>
