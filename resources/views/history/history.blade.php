@extends('layout.master')

@section('content')
<div class="pull-right">
    <p><a class="btn btn-success btn-outline" href="/"><i class="ion ion-home"></i></a></p>
</div>

<div class="clearfix"></div>

@include('dashboard.partials.errors')

<div class="section-timeline">
    <h1>{{ trans('cachet.incidents.past') }}</h1>
    @foreach($all_incidents as $month => $incidents_month)
        <h3>{{ $month }}</h3>
        @foreach($incidents_month as $date => $incidents)
        @include('partials.incidents', [compact($date), compact($incidents)])
        @endforeach
    @endforeach
</div>
@stop
