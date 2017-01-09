@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-pie-outline"></i> {{ trans('dashboard.metrics.metrics') }}
    </span>
    > <small>{{ trans('dashboard.metrics.add.title') }}</small>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.partials.errors')
            <form class="form-vertical" name="MetricsForm" role="form" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <label for="metric-name">{{ trans('forms.metrics.name') }}</label>
                        <input type="text" class="form-control" name="metric[name]" id="metric-name" required value="{{ Binput::old('metric.name') }}" placeholder="{{ trans('forms.metrics.name') }}">
                    </div>
                    <div class="form-group">
                        <label for="metric-suffix">{{ trans('forms.metrics.suffix') }}</label>
                        <input type="text" class="form-control" name="metric[suffix]" id="metric-suffix" required value="{{ Binput::old('metric.suffix') }}" placeholder="{{ trans('forms.metrics.suffix') }}">
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.metrics.description') }}</label>
                        <div class='markdown-control'>
                            <textarea name="metric[description]" class="form-control" rows="5" placeholder="{{ trans('forms.metrics.description') }}">{{ Binput::old('metric.description') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.metrics.calc_type') }}</label>
                        <select name="metric[calc_type]" class="form-control" required>
                            <option value="0" selected>{{ trans('forms.metrics.type_sum') }}</option>
                            <option value="1">{{ trans('forms.metrics.type_avg') }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.metrics.default_view') }}</label>
                        <select name="metric[default_view]" class="form-control" required>
                            <option value="0">{{ trans('cachet.metrics.filter.last_hour') }}</option>
                            <option value="1" selected>{{ trans('cachet.metrics.filter.hourly') }}</option>
                            <option value="2">{{ trans('cachet.metrics.filter.weekly') }}</option>
                            <option value="3">{{ trans('cachet.metrics.filter.monthly') }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="metric-default_value">{{ trans('forms.metrics.default-value') }}</label>
                        <input type="number" class="form-control" name="metric[default_value]" id="metric-default_value" value="{{ Binput::old('metric.default_value') }}" placeholder="{{ trans('forms.metrics.default-value') }}">
                    </div>
                    <div class="form-group">
                        <label for="metric-places">{{ trans('forms.metrics.places') }}</label>
                        <input type="number" min="0" max="4" class="form-control" name="metric[places]" id="metric-places" required value="{{ Binput::old('metric.places') }}" placeholder="{{ trans('forms.metrics.places') }}">
                    </div>
                    <div class="form-group">
                        <label for="metric-places">{{ trans('forms.metrics.threshold') }}</label>
                        <input type="number" min="0" max="100" class="form-control" name="metric[threshold]" id="metric-threshold" required value="{{ Binput::old('metric.threshold') }}" placeholder="{{ trans('forms.metrics.threshold') }}">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="hidden" value="0" name="metric[display_chart]">
                            <input type="checkbox" value="1" name="metric[display_chart]" checked>
                            {{ trans('forms.metrics.display-chart') }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.metrics.visibility') }}</label>
                        <select name="metric[visible]" class="form-control" required>
                            <option value="0">{{ trans('forms.metrics.visibility_authenticated') }}</option>
                            <option value="1">{{ trans('forms.metrics.visibility_public') }}</option>
                            <option value="2">{{ trans('forms.metrics.visibility_hidden') }}</option>
                        </select>
                    </div>
                </fieldset>
                <div class="form-group">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">{{ trans('forms.add') }}</button>
                        <a class="btn btn-default" href="{{ cachet_route('dashboard.metrics') }}">{{ trans('forms.cancel') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
