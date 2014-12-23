@extends('layout.master')

@section('content')
    @if(Auth::check())
    <ul class='nav nav-pills'>
        <li>
            <a class="btn btn-default" href="{{ URL::route('dashboard') }}">{{ Lang::get('cachet.dashboard.dashboard') }}</a>
        </li>
        <li>
            <a class="btn btn-danger" href="{{ URL::route('logout') }}">{{ Lang::get('cachet.logout') }}</a>
        </li>
    </ul>
    <hr />
    @endif

    <div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>

    @include('partials.components')

    @if(Setting::get('display_graphs'))
    @include('partials.graphs')
    @endif

    @for($i=0; $i <= 7; $i++)
    @include('partials.incident', array('i', $i))
    @endfor
@stop
