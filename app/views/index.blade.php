@extends('layout.master')

@section('content')
	<div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>

	@if(Auth::check())
	<p>You're logged in. This will be a link to the Dashboard.</p>
	@endif

	@include('imports.components')

	@for($i=0; $i <= 7; $i++)
	@include('imports.incident', array('i', $i))
	@endfor

	@include('imports.support-link')
@stop
