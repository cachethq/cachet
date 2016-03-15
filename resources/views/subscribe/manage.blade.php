@extends('layout.master')

@section('content')
<div class="pull-right">
    <p><a class="btn btn-success btn-outline" href="/"><i class="ion ion-home"></i></a></p>
</div>

<div class="clearfix"></div>

@include('dashboard.partials.errors')

<div class="panel panel-default">
    <div class="panel-heading"><strong>{{ $subscriber->email }}</strong></div>
    @if($subscriber->subscriptions->count() > 0)
    <div class="panel-body">
        <p>{{ trans('cachet.subscriber.manage.my_subscriptions') }}</p>
    </div>
    <div class="list-group">
        @foreach($subscriber->subscriptions as $subscription)
        <div class="list-group-item">{{ $subscription->component->name }}</div>
        @endforeach
    </div>
    @else
    <div class="panel-body">
    <p>{{ trans('cachet.subscriber.manage.no_subscriptions') }}</p>
    </div>
    @endif
</div>
@stop
