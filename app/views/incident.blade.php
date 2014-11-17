<?php
	$incidentDate = Carbon::now()->subDays($i);
	$incidents = Incident::whereRaw('DATE(created_at) = "' . $incidentDate->format('Y-m-d') . '"')->orderBy('created_at', 'desc')->get();
?>
<li class='list-group-item'>
	<h1>{{ $incidentDate->format('jS M, Y') }}</h1>
	<ul class='list-group'>
	@if($incidents->count() === 0)
	<li class='list-group-item'>No incidents reported.</li>
	@else
	@foreach($incidents as $incident)
	<li class='list-group-item'>
		<h2>{{ $incident->name }}, <small>{{ $incident->humanStatus }}</small></h2>
		<h3><time>{{ $incident->created_at->format('H:i:s A') }}</time></h3>
		<p>{{ $incident->message }}</p>
	</li>
	@endforeach
	@endif
	</ul>
</li>
