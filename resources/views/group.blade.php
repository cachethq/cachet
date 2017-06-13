@extends('layout.master')

@section('title', $group->name.' | '.$site_title)

@section('bodyClass', 'no-padding')

@section('outer-content')
@include('partials.nav')
@stop

@section('content')
<h1>{{ $group->name }}</h1>

<hr>

@include('partials.modules.timeline', ['all_incidents' => $group->incidents, 'days_to_show' => 7])
@stop

@section('bottom-content')
@include('partials.footer')
@stop
