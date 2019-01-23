@extends('layout.master')

@section('content')
    @markdown($privacyStatement)
@stop

@section('bottom-content')
    @include('partials.footer')
@stop
