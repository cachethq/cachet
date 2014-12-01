@extends('layout.master')

@section('content')
    <div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>

    @if(Auth::check())
    <div class='row'>
        <div class='col-md-12'>
            <a class="btn btn-primary pull-right" href="/auth/logout">{{ Lang::get('cachet.logout') }}</a>
            <p>{{ Lang::get('cachet.dashboard_link') }}</p>
        </div>
    </div>
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
