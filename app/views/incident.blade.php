<?php
	$incidentDate = Carbon::now()->subDays($i);
	$incidents = Incident::where('created_at', $incidentDate)->get()
?>
<li>
	<h1>{{ $incidentDate->format('jS M, Y') }}</h1>
	<ul>
	@if($incidents->count() === 0)
	<li>No incidents reported.</li>
	@else
	@foreach($incidents as $incident)
	<li>
		<h2>{{ $incident->name }}</h2>
		<p>{{ $incident->message }}</p>
	</li>
	@endforeach
	@endif
	</ul>
</li>
