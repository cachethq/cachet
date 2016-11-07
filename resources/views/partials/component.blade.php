<li class="components-group__item {{ $component->group_id ? "sub-component" : "component" }}">
    <i class="ion ion-ios-circle-filled text-component-{{ $component->status }} {{ $component->status_color }}" data-toggle="tooltip" title="{{ $component->human_status }}"></i>
    @if($component->link)
    <a href="{{ $component->link }}" target="_blank" class="links">{{ $component->name }}</a>
    @else
    {{ $component->name }}
    @endif

    @if($component->description)
    <i class="ion ion-ios-help-outline help-icon" data-toggle="tooltip" data-title="{{ $component->description }}" data-container="body"></i>
    @endif

    <div class="pull-right">
        <small class="components-group__status text-component-{{ $component->status }} {{ $component->status_color }}" data-toggle="tooltip" title="{{ trans('cachet.components.last_updated', ['timestamp' => $component->updated_at_formatted]) }}">{{ $component->human_status }}</small>
    </div>
</li>
