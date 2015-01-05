@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <i class="ion ion-stats-bars"></i> {{ trans('dashboard.metrics.metrics') }}
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3>{{ trans('dashboard.metrics.metrics') }}</h3>
            <p class='lead'>Eventually this page will show all of the graphs that make up your metrics.</p>
        </div>
    </div>
@stop
