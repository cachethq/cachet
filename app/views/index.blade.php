@extends('layout.master')

@section('content')
    <div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>

    @include('partials.components')

    @if(Setting::get('display_graphs'))
    @include('partials.graphs')
    @endif

    @foreach(range(0, 7) as $i => $v)
    @include('partials.incident', array('i', $i))
    @endforeach
@stop
