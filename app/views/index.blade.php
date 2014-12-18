@extends('layout.master')

@section('content')
    <div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>

    @if(Auth::check())
    <div class='page-header text-right'>
        <div class='btn-group'>
            <a class="btn btn-default" href="{{ URL::route('dashboard') }}">{{ Lang::get('cachet.dashboard.dashboard') }}</a>
            <a class="btn btn-danger" href="{{ URL::route('logout') }}">{{ Lang::get('cachet.logout') }}</a>
        </div>
    </div>
    @endif

    @include('partials.components')

    @if(Setting::get('display_graphs'))
    @include('partials.graphs')
    @endif

    @for($i=0; $i <= 7; $i++)
    @include('partials.incident', array('i', $i))
    @endfor
@stop
