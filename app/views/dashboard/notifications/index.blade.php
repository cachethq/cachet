@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <i class="ion ion-email"></i> {{ trans('cachet.dashboard.notifications') }}
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3>Notifications</h3>
        </div>
    </div>
@stop
