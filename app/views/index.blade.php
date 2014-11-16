@extends('layout.master')

@section('content')
	<ul>
	@for ($i=0; $i <= 7; $i++)
		@include('incident', array('i', $i))
	@endfor
	</ul>
@stop
