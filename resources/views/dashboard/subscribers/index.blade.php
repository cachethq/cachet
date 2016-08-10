@extends('layout.dashboard')

@section('content')
<div class="header fixed">
<div class="sidebar-toggler visible-xs">
    <i class="ion ion-navicon"></i>
</div>
<span class="uppercase">
    <i class="ion ion-ios-email-outline"></i> {{ trans('dashboard.subscribers.subscribers') }}
</span>
@if($current_user->isAdmin && subscribers_enabled())
<a class="btn btn-md btn-success pull-right" href="{{ route('dashboard.subscribers.add') }}">
    {{ trans('dashboard.subscribers.add.title') }}
</a>
@endif
<div class="clearfix"></div>
</div>
<div class="content-wrapper header-fixed">
<div class="row">
    <div class="col-sm-12">
        <p class="lead">{{ trans('dashboard.subscribers.description') }}</p>

        <div class="striped-list">
            @foreach($subscribers as $subscriber)
            <div class="row striped-list-item">
                <div class="col-xs-3">
                    <p>{{ trans('dashboard.subscribers.subscriber', ['email' => $subscriber->email, 'date' => $subscriber->created_at]) }}</p>
                </div>
                <div class="col-xs-3">
                    @if(is_null($subscriber->getOriginal('verified_at')))
                    <b class="text-danger">{{ trans('dashboard.subscribers.not_verified') }}</b>
                    @else
                    <b class="text-success">{{ trans('dashboard.subscribers.verified') }}</b>
                    @endif
                </div>
                <div class="col-xs-3">
                    @if($subscriber->subscriptions->count() > 0)
                    {!! $subscriber->subscriptions->map(function ($subscription) {
                        return '<span class="label label-primary">'.$subscription->component->name.'</span>';
                    })->implode(' ') !!}
                    @else
                    <p>{{ trans('dashboard.subscribers.no_subscriptions') }}</p>
                    @endif
                </div>
                <div class="col-xs-3 text-right">
                    <a href="/dashboard/subscribers/{{ $subscriber->id }}/delete" class="btn btn-danger confirm-action" data-method='DELETE'>{{ trans('forms.delete') }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@stop
