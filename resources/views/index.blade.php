@extends('layout.master')

@section('content')
@include('partials.modules.messages')
@include('partials.modules.status')
@include('partials.modules.stickied')
@include('partials.about-app')
@include('partials.modules.components')
@include('partials.modules.metrics')
@include('partials.modules.scheduled')
@include('partials.modules.timeline')
@stop

@section('bottom-content')
@include('partials.footer')
@stop
