@extends('layout.master')

@section('content')
    <div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>

    @if(Auth::check())
    <div class='row'>
        <div class='col-md-12'>
            <div class='row'>
                <div class='col-md-6'>
                    <p>{{ Lang::get('cachet.logged_in') }}</p>
                </div>
                <div class='col-md-6'>
                    <div class='btn-group pull-right'>
                        <a class="btn btn-default" href="{{ URL::route('dashboard') }}">{{ Lang::get('cachet.dashboard.dashboard') }}</a>
                        <a class="btn btn-danger" href="{{ URL::route('logout') }}">{{ Lang::get('cachet.logout') }}</a>
                    </div>
                </div>
            </div>
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
