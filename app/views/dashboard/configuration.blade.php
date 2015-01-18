@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon ion-power"></i> {{ trans('dashboard.configure.configure') }}
        </span>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9">
                        {{ trans('dashboard.configure.steps.setup') }}
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="#" class="btn btn-block btn-success disabled">
                            <span>{{ trans('dashboard.configure.steps.setup-button') }}</span>
                        </a>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-9">
                        {{ trans('dashboard.configure.steps.login') }}
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="#" class="btn btn-block btn-success disabled">
                            <span>{{ trans('dashboard.configure.steps.login-button') }}</span>
                        </a>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-9">
                        {{ trans('dashboard.configure.steps.component') }}
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="{{ route('dashboard.components.add') }}" class="btn btn-block btn-success {{ $hasComponents ? 'disabled' : null }}">
                            <span>{{ trans('dashboard.configure.steps.component-button') }}</span>
                        </a>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-9">
                        {{ trans('dashboard.configure.steps.incident') }}
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="{{ route('dashboard.incidents.add') }}" class="btn btn-block btn-success {{ $hasIncidents ? 'disabled' : null }}">
                            <span>{{ trans('dashboard.configure.steps.incident-button') }}</span>
                        </a>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-9">
                        {{ trans('dashboard.configure.steps.customize') }}
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="{{ route('dashboard.settings.theme') }}" class="btn btn-block btn-success {{ $hasCustomized ? 'disabled' : null }}">
                            <span>{{ trans('dashboard.configure.steps.customize-button') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
