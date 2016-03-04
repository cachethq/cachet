@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon icon ion-android-alert"></i> {{ trans('dashboard.metrics.metrics') }}
        </span>
        > <small>{{ trans('dashboard.metrics.edit.title') }}</small>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                @include('dashboard.partials.errors')
                <form class='form-vertical' name='MetricsForm' role='form' method='POST'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="form-group">
                            <label for="metric-name">{{ trans('forms.metrics.name') }}</label>
                            <input type="text" class="form-control" name="name" id="metric-name" required value="{{ $metric->name }}">
                        </div>
                        <div class="form-group">
                            <label for="metric-suffix">{{ trans('forms.metrics.suffix') }}</label>
                            <input type="text" class="form-control" name="suffix" id="metric-suffix" required value="{{ $metric->suffix }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.metrics.description') }}</label>
                            <div class='markdown-control'>
                                <textarea name="description" class="form-control" rows="5">{{ $metric->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.metrics.calc_type') }}</label>
                            <select name="calc_type" class="form-control" required>
                                <option value="0" {{ $metric->calc_type === 0 ? "selected" : null }}>{{ trans('forms.metrics.type_sum') }}</option>
                                <option value="1" {{ $metric->calc_type === 1 ? "selected" : null }}>{{ trans('forms.metrics.type_avg') }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.metrics.default_view') }}</label>
                            <select name="default_view" class="form-control" required>
                                <option value="0" {{ $metric->default_view === 0 ? "selected" : null }}>{{ trans('cachet.metrics.filter.last_hour') }}</option>
                                <option value="1" {{ $metric->default_view === 1 ? "selected" : null }}>{{ trans('cachet.metrics.filter.hourly') }}</option>
                                <option value="2" {{ $metric->default_view === 2 ? "selected" : null }}>{{ trans('cachet.metrics.filter.weekly') }}</option>
                                <option value="3" {{ $metric->default_view === 3 ? "selected" : null }}>{{ trans('cachet.metrics.filter.monthly') }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="metric-default_value">{{ trans('forms.metrics.default-value') }}</label>
                            <input type="number" class="form-control" name="default_value" id="metric-default_value" value="{{ $metric->default_value }}">
                        </div>
                        <div class="form-group">
                            <label for="metric-places">{{ trans('forms.metrics.places') }}</label>
                            <input type="number" min="0" max="4" class="form-control" name="places" id="metric-places" required value="{{ $metric->places }}">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="hidden" value="0" name="display_chart">
                                <input type="checkbox" value="1" name="display_chart" {{ $metric->display_chart ? 'checked' : null }}>
                                {{ trans('forms.metrics.display-chart') }}
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="hidden" value="0" name="uptime_calc">
                                <input type="checkbox" value="1" name="uptime_calc" {{ $metric->uptime_calc ? 'checked' : null }}>
                                {{ trans('forms.metrics.uptime_calc') }}
                            </label>
                        </div>
                    </fieldset>

                    <input type="hidden" name="id" value={{$metric->id}}>

                    <div class='form-group'>
                        <div class='btn-group'>
                            <button type="submit" class="btn btn-success">{{ trans('forms.update') }}</button>
                            <a class="btn btn-default" href="{{ route('dashboard.metrics.index') }}">{{ trans('forms.cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
