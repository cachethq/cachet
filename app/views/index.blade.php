@extends('layout.master')

@section('content')
	<div class='row'>
		<div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>
	</div>

	<div class='row'>
		<ul class='list-group'>
			@foreach(Component::get() as $component)
			<li class='list-group-item'>
				{{ $component->name }}
				@if($component->description)
				<small>{{ $component->description }}</small>
				@endif

				<span class='pull-right'>{{ $component->humanStatus }}</span>
			</li>
			@endforeach
		</ul>
	</div>

	<div class='row'>
		<h1>Past Incidents</h1>
		<ul class='list-group'>
		@for($i=0; $i <= 7; $i++)
			@include('incident', array('i', $i))
		@endfor
		</ul>
	</div>
@stop
