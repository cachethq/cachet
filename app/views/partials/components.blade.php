@if($components->count() > 0)
<ul class='list-group components'>
    @foreach($components as $component)
    <li class='list-group-item component'>
        @if($component->link)
        <h3 class='pull-right'><a href='{{ $component->link }}' target='_blank'><i class='ion ion-link'></i></a></h3>
        @endif
        <h4>{{ $component->name }} <small class='text-component-{{ $component->status }}'>{{ $component->humanStatus }}</small></h4>
        @if($component->description)
        <p>{{ $component->description }}</p>
        @endif
    </li>
    @endforeach
</ul>
@endif
