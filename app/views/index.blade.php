@extends('layout.master')

@section('content')
    <div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>

    @include('partials.components')

    @if(Setting::get('display_graphs'))
    @include('partials.graphs')
    @endif

    @for($i=0; $i <= 7; $i++)
    @include('partials.incident', array('i', $i))
    @endfor
@stop
