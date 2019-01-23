@extends('layout.master')

@section('content')
    @markdown($imprint)
@stop

@section('bottom-content')
    @include('partials.footer')
@stop
