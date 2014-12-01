@extends('layout.master')

@section('content')
    <div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>

    @if(Auth::check())
    <a class="pull-right" href="/auth/logout">Logout</a>
    <p>You're logged in. This will be a link to the Dashboard.</p>
    @endif

    @include('imports.components')

    @if(Setting::get('display_graphs'))
    @include('imports.graphs')
    @endif

    @for($i=0; $i <= 7; $i++)
    @include('imports.incident', array('i', $i))
    @endfor

    @include('imports.support-link')
@stop
