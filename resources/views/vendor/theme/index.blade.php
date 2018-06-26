@extends('theme::layout.master')

@section('content')
@include('theme::partials.modules.messages')
@include('theme::partials.modules.status')
@include('theme::partials.about-app')
@include('theme::partials.modules.components')
@include('theme::partials.modules.metrics')
@include('theme::partials.modules.stickied')
@include('theme::partials.modules.scheduled')
@include('theme::partials.modules.timeline')
@stop

@section('bottom-content')
@include('theme::partials.footer')
@stop
