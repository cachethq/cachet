@extends('layout.master')

@section('content')
	<div class='page-header'>
		<div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>
	</div>

	<ul class='list-group'>
		@foreach(Component::get() as $component)
		<li class='list-group-item'>
			<div class='row'>
				<div class='col-md-8'>
					<h4>{{ $component->name }}</h4>
					@if($component->description)
					<p>{{ $component->description }}</p>
					@endif
				</div>
				<div class='col-md-4'>
					<p class='text-right'>{{ $component->humanStatus }}</p>
				</div>
			</div>
		</li>
		@endforeach
	</ul>

	<h1>Past Incidents</h1>
	@for($i=0; $i <= 7; $i++)
	@include('incident', array('i', $i))
	@endfor
@stop
