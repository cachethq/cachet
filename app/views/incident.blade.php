<?php
	$incidentDate = Carbon::now()->subDays($i);
	$incidents = Incident::whereRaw('DATE(created_at) = "' . $incidentDate->format('Y-m-d') . '"')->orderBy('created_at', 'desc')->get();
?>
<h2>{{ $incidentDate->format('jS M, Y') }}</h2>
<hr />
@if($incidents->count() === 0)
<p>No incidents reported.</p>
@else
@foreach($incidents as $incident)
<h3><span class='label {{ $incident->labelColor }}'>{{ $incident->humanStatus }}</span> {{ $incident->name }}</h3>
<p>{{ $incident->message }}</p>
<h4><time>{{ $incident->created_at->format('H:i:s A') }} {{ Config::get('app.timezone') }}</time></h4>
@endforeach
@endif
