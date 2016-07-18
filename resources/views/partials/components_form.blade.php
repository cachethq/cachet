@if($component_groups->count() > 0)
    @foreach($component_groups as $componentGroup)
        <ul class="list-group components">
            @if($componentGroup->enabled_components->count() > 0)
                <li class="list-group-item group-name">
                    <i class="{{ $componentGroup->collapse_class_with_subscriptions($subscriptions) }} group-toggle"></i>
                    <strong>{{ $componentGroup->name }}</strong>
                    <div class="pull-right text-muted small">
                        <a href="#" class="select-group" id="select-all-{{$componentGroup->id}}">Select All</a>
                        &nbsp;|&nbsp;
                        <a href="#" class="deselect-group" id="deselect-all-{{$componentGroup->id}}">Deselect All</a>
                    </div>
                </li>
                <div class="form-group group-items {{ $componentGroup->has_subscriber($subscriptions) ? null : "hide" }}">
                    @foreach($componentGroup->enabled_components()->orderBy('order')->get() as $component)
                    @include('partials.component_input', compact($component))
                    @endforeach
                </div>
            @endif
        </ul>
    @endforeach
@endif

@if($ungrouped_components->count() > 0)
    <ul class="list-group components">
        <li class="list-group-item group-name">
            <strong>{{ trans('cachet.components.group.other') }}</strong>
        </li>
        @foreach($ungrouped_components as $component)
        @include('partials.component_input', compact($component))
        @endforeach
    </ul>
@endif
