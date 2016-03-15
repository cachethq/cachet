@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="ion ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="ion ion-ios-email-outline"></i> {{ trans('dashboard.subscribers.subscribers') }}
        </span>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
            @include('dashboard.partials.errors')
            <form name="SubscriberForm" class="form-vertical" role="form" action="/dashboard/subscribers/add" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                <div class="form-group">
                    <label>{{ trans('forms.user.email') }}</label>
                    <input type="email" class="form-control" name="email" value="{{ Binput::old('email') }}" required>
                </div>
                </fieldset>

                <div class="form-group">
                    <div class='btn-group'>
                        <button type="submit" class="btn btn-success">{{ trans('forms.add') }}</button>
                        <a class="btn btn-default" href="{{ route('dashboard.subscribers.index') }}">{{ trans('forms.cancel') }}</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@stop
