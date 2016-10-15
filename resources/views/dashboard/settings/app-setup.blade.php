@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @if(isset($sub_menu))
    @include('dashboard.partials.sub-sidebar')
    @endif
    <div class="content-wrapper">
        <div class="header sub-header" id="application-setup">
            <span class="uppercase">
                {{ trans('dashboard.settings.app-setup.app-setup') }}
            </span>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form id="settings-form" name="SettingsForm" class="form-vertical" role="form" action="{{ cachet_route('dashboard.settings', [], 'post') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @include('dashboard.partials.errors')
                    <fieldset>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.app-setup.site-name') }}</label>
                                    <input type="text" class="form-control" name="app_name" value="{{ $app_name }}" required placeholder="{{ trans('forms.settings.app-setup.site-name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.app-setup.site-url') }}</label>
                                    <input type="text" class="form-control" name="app_domain" value="{{ $app_domain }}" required placeholder="{{ trans('forms.settings.app-setup.site-url') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.app-setup.about-this-page') }}</label>
                                    <div class='markdown-control'>
                                        <textarea name="app_about" class="form-control autosize" rows="4" placeholder="{{ trans('forms.settings.app-setup.about-this-page') }}">{{ $raw_app_about }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.app-setup.days-of-incidents') }}</label>
                                    <input type="number" max="100" name="app_incident_days" class="form-control" value="{{ Config::get('setting.app_incident_days', 7) }}" placeholder="{{ trans('forms.settings.app-setup.days-of-incidents') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" value="0" name="enable_subscribers">
                                        <input type="checkbox" value="1" name="enable_subscribers" {{ Config::get('setting.enable_subscribers') ? 'checked' : null }}>
                                        {{ trans('forms.settings.app-setup.subscribers') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" value="0" name="skip_subscriber_verification">
                                        <input type="checkbox" value="1" name="skip_subscriber_verification" {{ Config::get('setting.skip_subscriber_verification') ? 'checked' : null }}>
                                        {{ trans('forms.settings.app-setup.skip_subscriber_verification') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" value="0" name="display_graphs">
                                        <input type="checkbox" value="1" name="display_graphs" {{ $app_graphs ? 'checked' : null }}>
                                        {{ trans('forms.settings.app-setup.display-graphs') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" value="0" name="show_support">
                                        <input type="checkbox" value="1" name="show_support" {{ $show_support ? 'checked' : null }}>
                                        {{ trans('setup.show_support') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" value="0" name="enable_external_dependencies">
                                        <input type="checkbox" value="1" name="enable_external_dependencies" {{ $enable_external_dependencies ? 'checked' : null }}>
                                        {{ trans('forms.settings.app-setup.enable_external_dependencies') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" value="0" name="show_timezone">
                                        <input type="checkbox" value="1" name="show_timezone" {{ $show_timezone ? 'checked' : null }}>
                                        {{ trans('forms.settings.app-setup.show_timezone') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" value="0" name="only_disrupted_days">
                                        <input type="checkbox" value="1" name="only_disrupted_days" {{ $only_disrupted_days ? 'checked' : null }}>
                                        {{ trans('forms.settings.app-setup.only_disrupted_days') }}
                                    </label>
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

                    <input type="hidden" name="remove_banner" value="">
                </form>
            </div>
        </div>
    </div>
</div>
@stop
