<?php
	$incidentDate = Carbon::now()->subDays($i);
	$incidents = Incident::whereRaw('DATE(created_at) = "' . $incidentDate->format('Y-m-d') . '"')->get();
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
		<h3><time>{{ $incident->created_at->format('H:i:s A') }}</time></h3>
		<p>{{ $incident->message }}</p>
	</li>
	@endforeach
	@endif
	</ul>
</li>
