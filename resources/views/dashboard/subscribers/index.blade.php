@extends('layout.dashboard')

@section('content')
    <div class="header fixed">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon icon ion-android-alert"></i> {{ trans('dashboard.subscribers.subscribers') }}
        </span>
        @if($loggedUser->isAdmin)
        <a class="btn btn-sm btn-success pull-right" href="{{ route('dashboard.subscribers.add') }}">
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
                    <p>{{ $subscriber->email }}</p>
                </div>
                <div class="col-xs-3">
                    <p>{{ $subscriber->created_at }}</p>
                </div>
                <div class="col-xs-3">
                    @if(is_null($subscriber->verified_at))
                    <b class="text-danger">{{ trans('dashboard.subscribers.not_verified') }}</b>
                    @else
                    <b class="text-success">{{ trans('dashboard.subscribers.verified') }}</b>
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
