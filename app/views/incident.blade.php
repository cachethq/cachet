<li class='list-group-item'>
	<?php
		$incidentDate = Carbon::now()->subDays($i);
		$incidents = Incident::whereRaw('DATE(created_at) = "' . $incidentDate->format('Y-m-d') . '"')->orderBy('created_at', 'desc')->get();
	?>
	<h3 class='list-group-item-heading'>{{ $incidentDate->format('jS M, Y') }}</h3>
	<hr />

	@unless($incidents->count() > 0)
	<p>No incidents reported.</p>
	@endunless

	@foreach($incidents as $incident)
	<span class='badge badge-{{ $incident->color }}'><i class='glyphicon {{ $incident->icon }}'></i></span>
	<h4>{{ $incident->name }}</h4>
	<time>{{ $incident->created_at->format('H:i:s A') }} {{ Config::get('app.timezone') }}</time>
	<p>{{ $incident->message }}</p>
	@endforeach
</li>
