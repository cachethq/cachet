<ul class="list-group components">
    @if($component_groups->count() > 0)
    @foreach($component_groups as $componentGroup)
    @if($componentGroup->components->enabled()->count() > 0)
    <li class="list-group-item group-name">
        <i class="ion-ios-minus-outline group-toggle"></i>
        <strong>{{ $componentGroup->name }}</strong>
    </li>

    <div class="group-items">
    @foreach($componentGroup->components->enabled()->sortBy('order') as $component)
    @include('partials.component', compact($component))
    @endforeach
    </div>
    @endif
    @endforeach
    @if($ungrouped_components->count() > 0)
    <li class="list-group-item break"></li>
    @endif
    @endif

    @if($ungrouped_components->count() > 0)
    @foreach($ungrouped_components as $component)
    @include('partials.component', compact($component))
    @endforeach
    @endif
</ul>
