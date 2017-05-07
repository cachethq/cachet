<li class="list-group-item component--status-1">
    <div class="component__icon">
        {{ $component->icon }}
        <i class="{{ $component->icon }}"></i>
    </div>

    <div class="component__name">{{ $component->name }}</div>

    @if($component->link)
    <div class="component__link hidden-xs">
        <a href="{{ $component->link }}" target="_blank" class="links">{{ $component->link }}</a>
    </div>
    @endif

    @if($component->description)
    <i class="ion ion-ios-help-outline help-icon" data-toggle="tooltip" data-title="{{ $component->description }}" data-container="body"></i>
    @endif

    <div class="pull-right">
        <small class="text-component-{{ $component->status }} {{ $component->status_color }}" data-toggle="tooltip" title="{{ trans('cachet.components.last_updated', ['timestamp' => $component->updated_at_formatted]) }}">{{ $component->human_status }}</small>
    </div>
</li>
