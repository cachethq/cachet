@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-browsers-outline"></i> {{ trans('dashboard.plugins.plugins') }}
    </span>
    &gt; <small>{{ trans('dashboard.plugins.install.title') }}</small>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            @include('dashboard.partials.errors')
            <form name="InstallPluginForm" class="form-vertical" role="form" action="/dashboard/plugins/install" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <label for="plugin-vendor">{{ trans('forms.plugins.vendor') }}</label>
                        <input type="text" class="form-control" name="plugin[vendor]" id="plugin-vendor" required>
                    </div>
                    <div class="form-group">
                        <label for="plugin-package">{{ trans('forms.plugins.package') }}</label>
                        <input type="text" class="form-control" name="plugin[package]" id="plugin-package" required>
                    </div>
                    <div class="form-group">
                        <label for="plugin-version">{{ trans('forms.plugins.version') }}</label>
                        <input type="text" class="form-control" name="plugin[version]" id="plugin-version" value="@stable" placeholder="@stable" required>
                    </div>
                </fieldset>

                <input type="hidden" name="plugin[order]" value="0">

                <div class="btn-group">
                    <button type="submit" class="btn btn-success">{{ trans('forms.plugins.actions.install') }}</button>
                    <a class="btn btn-default" href="{{ route('dashboard.plugins.index') }}">{{ trans('forms.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
