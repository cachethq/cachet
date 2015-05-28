<ul class="list-group components">
    @if($componentGroups->count() > 0)
    @foreach($componentGroups as $componentGroup)
    @if($componentGroup->components->count() > 0)
    <li class="list-group-item group-name">
        <i class="ion-ios-minus-outline group-toggle"></i>
        <strong>{{ $componentGroup->name }}</strong>
    </li>

    <div class="group-items">
    @foreach($componentGroup->components->sortBy('order') as $component)
    @include('partials.component', compact($component))
    @endforeach
    </div>
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
