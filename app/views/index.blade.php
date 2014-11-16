@extends('layout.master')

@section('content')
	<ul>
		@foreach(Component::get() as $component)
		<li>
			{{ $component->name }}
			@if($component->description)
			<small>{{ $component->description }}</small>
			@endif

			<span class='pull-right'>
				{{ $component->humanStatus }}
			</span>
		</li>
		@endforeach
	</ul>

	<h1>Past Incidents</h1>
	<ul>
	@for($i=0; $i <= 7; $i++)
		@include('incident', array('i', $i))
	@endfor
	</ul>
@stop
