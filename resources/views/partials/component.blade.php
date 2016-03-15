<li class="list-group-item {{ $component->group_id ? "sub-component" : "component" }}">
    @if($component->link)
    <a href="{{ $component->link }}" target="_blank" class="links">{{ $component->name }}</a>
    @else
    {{ $component->name }}
    @endif

    @if($component->description)
    <i class="ion ion-ios-help-outline help-icon" data-toggle="tooltip" data-title="{{ $component->description }}"></i>
    @endif

    @if(subscribers_enabled())
    <a href="#" data-toggle="modal" data-target="#subscribe-modal" data-component-id="{{ $component->id }}"><i class="ion ion-ios-email-outline" data-toggle="tooltip" data-title="{{ trans('cachet.subscriber.email.component.tooltip-title', ['component_name' => $component->name]) }}"></i></a>
    @endif

    <div class="pull-right">
        <small class="text-component-{{ $component->status }} {{ $component->status_color }}">{{ $component->human_status }}</small>
    </div>
</li>
