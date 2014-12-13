@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-exclamation-triangle"></i> {{ Lang::get('cachet.dashboard.incidents') }}
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h3>Incidents</h3>

			@if ($incidents->count() === 0)
			<p><strong>Woah! No incidents, your doing well!</strong></p>
			@else
			<p>You have <strong>{{ $incidents->count() }} incidents.</strong></p>
			@endif

			<h3>Incident Templates</h3>
		</div>
	</div>
@stop
