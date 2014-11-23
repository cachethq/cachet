@extends('layout.master')

@section('content')
	<div class='page-header'>
		<ul class='list-group components'>
			@foreach(Component::get() as $component)
			<li class='list-group-item component '>
				<!-- <span class='badge badge-{{ $component->color }}'><i class='glyphicon glyphicon-stop'></i></span> -->
				<h4>{{ $component->name }} <small class='{{ $component->color }}'>{{ $component->humanStatus }}</small></h4>
				<p>{{ $component->description }}</p>
			</li>
			@endforeach
		</ul>
	</div>
@stop
