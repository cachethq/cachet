@if($components->count() > 0)
<ul class="list-group components">
    @foreach($components as $component)
    <li class="list-group-item component">
        <div class="row">
            <div class="col-xs-10">
                <h4>
                    {{ $component->name }}
                    @if($component->description)
                    <i class="ion-ios-help-outline help-icon" data-toggle="tooltip" data-title="{{ $component->description }}"></i>
                    @endif
                    <small class="text-component-{{ $component->status }}">{{ $component->humanStatus }}</small>
                </h4>
            </div>
            <div class="col-xs-2 text-right">
                <h4>
                    @if($component->link)
                    <a href="{{ $component->link }}" target="_blank"><i class="ion ion-link"></i></a>
                    @endif
                </h4>
            </div>
        </div>
    </li>
    @endforeach
</ul>
@endif
