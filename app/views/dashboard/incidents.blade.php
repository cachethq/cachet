@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-exclamation-triangle"></i> {{ Lang::get('cachet.dashboard.incidents') }}
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h3>Incidents</h3>

			@if ($incidents->count() === 0)
			<p class='lead'>Woah! No incidents, your doing well!</p>
			@else
			<p class='lead'>You have <strong>{{ $incidents->count() }}</strong> incidents.</p>
			@endif

			<ul class='list-group'>
				@foreach($incidents as $incident)
				<li class='list-group-item'>
					<div class='row'>
						<div class='col-md-6'>
							<strong>{{ $incident->name }}</strong>
							@if($incident->message)
							<p><small>{{ Str::words($incident->message, 5) }}</small></p>
							@endif
						</div>
						<div class='col-md-6'>
							<ul class='nav nav-pills pull-right'>
								<li role='presentation'><a href='/dashboard/incidents/{{ $incident->id }}/delete' class='btn btn-danger'>Delete</a></li>
							</ul>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
@stop
