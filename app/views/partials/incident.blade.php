<ul class='list-group'>
    <?php
        $incidentDate = Carbon::now()->subDays($i);
        $incidents = Incident::whereRaw('DATE(created_at) = "' . $incidentDate->format('Y-m-d') . '"')->orderBy('created_at', 'desc')->get();
    ?>
    <li class='list-group-item active'>
        <h3 class='list-group-item-heading'>{{ $incidentDate->format('jS M Y') }}</h3>
    </li>

    @unless($incidents->count() > 0)
    <li class='list-group-item'>{{ Lang::get('cachet.no_incidents') }}</li>
    @endunless

    @foreach($incidents as $incidentID => $incident)
    <li class='list-group-item'>
        <span class='badge badge-incident-{{ $incident->status }}'><i class='glyphicon {{ $incident->icon }}'></i></span>
        <h4>{{ $incident->name }} <small><time>{{ $incident->created_at->format('H:i:s A') }}</time></small></h4>
        {{ $incident->message }}
        @if($incidentID < ($incident->count() - 1))
    </li>
    @endif
    @endforeach
</ul>
