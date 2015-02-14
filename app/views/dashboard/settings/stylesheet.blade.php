@extends('layout.dashboard')

@section('content')
    <div class="content-panel">
        @if(isset($subMenu))
        @include('partials.dashboard.sub-sidebar')
        @endif
        <div class="content-wrapper">
            <div class="header sub-header" id="stylesheet">
                <span class="uppercase">
                    {{ trans('dashboard.settings.stylesheet.stylesheet') }}
                </span>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form name="SettingsForm" class="form-horizontal" role="form" action="/dashboard/settings" method="POST">
                        {{ Form::token() }}
                        @include('partials.dashboard.errors')
                        <fieldset>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.stylesheet.custom-css') }}</label>
                                        <textarea class="form-control" name="stylesheet" rows="10">{{ Setting::get('stylesheet') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">{{ trans('forms.save') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
