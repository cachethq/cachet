@if($components->count() > 0)
<ul class='list-group components'>
    @foreach($components as $component)
    <li class='list-group-item component '>
        <h4>{{ $component->name }} <small class='text-component-{{ $component->status }}'>{{ $component->humanStatus }}</small></h4>
        <p>{{ $component->description }}</p>
    </li>
    @endforeach
</ul>
@endif
