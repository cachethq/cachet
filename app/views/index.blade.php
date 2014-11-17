@extends('layout.master')

@section('content')
	<div class='row'>
		<div class='masthead-container'>
			<div class='masthead'>
				<div class='text-container'>
					<span class='page-name font-largest'><a href='#'>SITE_NAME</a></span>
				</div>
			</div>
		</div>
	</div>
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
		@for($i=0; $i <= 7; $i++)
		@include('incident', array('i', $i))
		@endfor
	</div>
@stop
