@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @if(isset($sub_menu))
    @include('dashboard.partials.sub-sidebar')
    @endif
    <div class="content-wrapper">
        <div class="header sub-header" id="stylesheet">
            <span class="uppercase">
                {{ trans('dashboard.settings.stylesheet.stylesheet') }}
            </span>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form name="SettingsForm" class="form-vertical" role="form" action="{{ cachet_route('dashboard.settings', [], 'post') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @include('dashboard.partials.errors')
                    <fieldset>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.stylesheet.custom-css') }}</label>
                                    <textarea class="form-control autosize" name="stylesheet" rows="10" placeholder="{{ trans('forms.settings.stylesheet.custom-css') }}">{{ Config::get('setting.stylesheet') }}</textarea>
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
