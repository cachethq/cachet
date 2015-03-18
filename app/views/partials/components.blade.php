@if($components->count() > 0)
<ul class="list-group components">
    @foreach($components as $component)
    <li class="list-group-item component">
        <strong>
            @if($component->link)
            <a href="{{ $component->link }}" target="_blank">{{ $component->name }}</a>
            @else
            {{ $component->name }}
            @endif

            @if($component->description)
            <i class="ion-ios-help-outline help-icon" data-toggle="tooltip" data-title="{{ $component->description }}"></i>
            @endif
        </strong>
        <div class="pull-right">
            <small class="text-component-{{ $component->status }}">{{ $component->humanStatus }}</small>
        </div>
    </li>
    @endforeach
</ul>
@endif
