@if($component_groups->count() > 0)
    <div class="filters">
        <div class="dropdown pull-right">
            Display component groups:
            <a href="javascript: void(0);" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="filter">All</span>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#" data-filter-component="0">All</a></li>
                @foreach($all_component_groups as $componentGroup)
                    <li><a href="#" data-filter-component="{{ $componentGroup->id }}">{{ $componentGroup->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if($component_groups->count() > 0)
@foreach($component_groups as $componentGroup)
<ul class="list-group components">
    @if($componentGroup->enabled_components->count() > 0)
    <li class="list-group-item group-name">
        <i class="{{ $componentGroup->collapse_class }} group-toggle"></i>
        <strong>{{ $componentGroup->name }}</strong>

        <div class="pull-right">
            <i class="ion ion-ios-circle-filled text-component-{{ $componentGroup->lowest_status }} {{ $componentGroup->lowest_status_color }}" data-toggle="tooltip" title="{{ $componentGroup->lowest_human_status }}"></i>
        </div>
    </li>

    <div class="group-items {{ $componentGroup->is_collapsed ? "hide" : null }}">
        @foreach($componentGroup->enabled_components()->orderBy('order')->get() as $component)
        @include('partials.component', compact($component))
        @endforeach
    </div>
    @endif
</ul>
@endforeach
@endif

@if($ungrouped_components->count() > 0)
<ul class="list-group components">
    <li class="list-group-item group-name"><strong>{{ trans('cachet.components.group.other') }}</strong></li>
    @foreach($ungrouped_components as $component)
    @include('partials.component', compact($component))
    @endforeach
</ul>
@endif

<script>
(function () {
    $('a[data-filter-component]').on('click', function(e) {
        var $this = $(this);
        var baseUrl = window.location.protocol + "//" + window.location.host + "/";
        var componentId = $this.attr('data-filter-component');

        if (componentId > 0) {
            window.location = baseUrl + 'group/' + componentId;
        } else {
            window.location = baseUrl;
        }
    });

    // Show the current selected component group in the dropdown
    @if($component_group_selected)
        $('.filters').find('a[data-toggle=dropdown] span.filter').text('{{ $component_group_selected->name }}');
    @endif
}());
</script>
